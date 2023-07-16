const Web3 = require("web3");
const web3 = new Web3("http://127.0.0.1:7545"); // Replace with your Ganache RPC server address

const senderAddress = "0x32c3E8c0eA10350FDc17BEE8bB02dCCF4Bd69B5A";
const receiverAddress = "0xd19460fb129E2dDd14915656aF1c7393D8f6889c";

const amountToSend = web3.utils.toWei("24", "ether"); // Sending 1 ETH
const gasLimit = 21000; // Default gas limit for simple transactions
const gasPrice = web3.utils.toWei("2", "gwei"); // Gas price in gwei

const sendTransaction = async () => {
  try {
    const accounts = await web3.eth.getAccounts();
    const nonce = await web3.eth.getTransactionCount(senderAddress);
    const transactionObject = {
      from: senderAddress,
      to: receiverAddress,
      value: amountToSend,
      gas: gasLimit,
      gasPrice: gasPrice,
      nonce: nonce,
    };
    const signedTransaction = await web3.eth.accounts.signTransaction(
      transactionObject,
      "0x46db0f99c7f2a73e925386d5eaf09dcafa6d065462310aa3b38e4890c3b1d7a8" // Replace with the private key of the sender address
    );
    const receipt = await web3.eth.sendSignedTransaction(signedTransaction.rawTransaction);
    console.log("Transaction successful:", receipt.transactionHash);
  } catch (error) {
    console.error("Error sending transaction:", error);
  }
};

sendTransaction();