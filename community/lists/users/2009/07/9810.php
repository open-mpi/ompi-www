<?
$subject_val = "Re: [OMPI users] Problems with MPI_Issend and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 21:06:29 2009" -->
<!-- isoreceived="20090703010629" -->
<!-- sent="Thu, 2 Jul 2009 21:06:15 -0400" -->
<!-- isosent="20090703010615" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Issend and MX" -->
<!-- id="71265009-E31C-45D2-A91F-CE75AD02A6BE_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4222-69945_at_sneakemail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Problems with MPI_Issend and MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 21:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Previous message:</strong> <a href="9809.php">8mj6tc902_at_[hidden]: "[OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>In reply to:</strong> <a href="9809.php">8mj6tc902_at_[hidden]: "[OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kris,
<br>
<p>I have not run your code yet, but I will try to this weekend.
<br>
<p>You can have MX checksum its messages if you set MX_CSUM=1 and use the  
<br>
MX debug library (e.g. LD_LIBRARY_PATH to /opt/mx/lib/debug).
<br>
<p>Do you have the problem if you use the MX MTL? To test it modify your  
<br>
mpirun as follows:
<br>
<p>$ mpirun -mca pml cm ...
<br>
<p>and do not specify any BTL info.
<br>
<p>Scott
<br>
<p>On Jul 2, 2009, at 6:05 PM, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi. I've now spent many many hours tracking down a bug that was  
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; my program to die, as though either its memory were getting  
</span><br>
<span class="quotelev1">&gt; corrupted or
</span><br>
<span class="quotelev1">&gt; messages were getting clobbered while going through the network, I
</span><br>
<span class="quotelev1">&gt; couldn't tell which. I really wish the checksum flag on btl_mx_flags
</span><br>
<span class="quotelev1">&gt; were working. But anyway, I think I've managed to recreate the core of
</span><br>
<span class="quotelev1">&gt; the problem in a small-ish test case which I've attached
</span><br>
<span class="quotelev1">&gt; (verifycontent.cc). This usually segfaults at MPI_Issend after sending
</span><br>
<span class="quotelev1">&gt; about 60-90 messages for me while using OpenMPI 1.3.2 with myricom's
</span><br>
<span class="quotelev1">&gt; mx-1.2.9 drivers on linux using gcc 4.3.2. Disabling the mx btl  
</span><br>
<span class="quotelev1">&gt; (mpirun
</span><br>
<span class="quotelev1">&gt; -mca btl ^mx) makes it work (likewise, the same for my own larger
</span><br>
<span class="quotelev1">&gt; project (Murasaki)). The MPI_Ssend using version
</span><br>
<span class="quotelev1">&gt; (verifycontent-ssend.cc) also works no problem over mx. So I suspect  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; issue lies in OpenMPI 1.3.2's handling of MPI_Issend over mx, but it's
</span><br>
<span class="quotelev1">&gt; also possible I've horribly misunderstood something fundamental about
</span><br>
<span class="quotelev1">&gt; MPI and it's just my fault, so if that's the case, please let me know
</span><br>
<span class="quotelev1">&gt; (but both my this test case and Murasaki work over mpichmx, so OpenMPI
</span><br>
<span class="quotelev1">&gt; is definitely doing something different).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a brief description of verifycontent.cc to make reading it  
</span><br>
<span class="quotelev1">&gt; easier:
</span><br>
<span class="quotelev1">&gt; * given -np=N, half the nodes will be sending, half will be receiving
</span><br>
<span class="quotelev1">&gt; some number of messages (reps)
</span><br>
<span class="quotelev1">&gt; * each message consists of buflen (5000) chars, set to some value  
</span><br>
<span class="quotelev1">&gt; based
</span><br>
<span class="quotelev1">&gt; on the sending node's rank and the sequence number of the message
</span><br>
<span class="quotelev1">&gt; * the receiving node starts an irecv for each sending node, tests each
</span><br>
<span class="quotelev1">&gt; request until a message arrives
</span><br>
<span class="quotelev1">&gt; * the receiver then checks the contents of the message to make sure it
</span><br>
<span class="quotelev1">&gt; matches what was supposed to be in there (this is where my real  
</span><br>
<span class="quotelev1">&gt; project,
</span><br>
<span class="quotelev1">&gt; Murasaki, fails actually. I can't seem to replicate that however).
</span><br>
<span class="quotelev1">&gt; * the senders meanwhile keep sending messages and dequeuing them when
</span><br>
<span class="quotelev1">&gt; their request tests as completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing out the current subversion trunk version, 1.4a1r21594, that
</span><br>
<span class="quotelev1">&gt; seems to pass my test case, but also tends to show errors like
</span><br>
<span class="quotelev1">&gt; &quot;mca_btl_mx_init: mx_open_endpoint() failed with status 20 (Busy)&quot; on
</span><br>
<span class="quotelev1">&gt; start up, and Murasaki still fails (messages turn into zeros about  
</span><br>
<span class="quotelev1">&gt; 132KB
</span><br>
<span class="quotelev1">&gt; in), so something still isn't right...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone has any ideas about this test case failing, or my larger  
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev1">&gt; of messages turning into zeros after 132KB (though sadly sometimes it
</span><br>
<span class="quotelev1">&gt; isn't at 132KB, but straight from 0KB, which is very confusing)  
</span><br>
<span class="quotelev1">&gt; while on
</span><br>
<span class="quotelev1">&gt; MX, I'd greatly appreciate it. Even a simple confirmation of &quot;Yes,
</span><br>
<span class="quotelev1">&gt; MPI_Issend/Irecv with MX has issues in 1.3.2&quot; would help my sanity.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kris Popendorf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keio University
</span><br>
<span class="quotelev1">&gt; <a href="http://murasaki">http://murasaki</a>................... &lt;- (Probably too cumbersome to  
</span><br>
<span class="quotelev1">&gt; expect
</span><br>
<span class="quotelev1">&gt; most people to test, but if you feel daring, try putting in some
</span><br>
<span class="quotelev1">&gt; Human/Mouse chromosomes over MX)
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;list&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt; //for atoi (in case someone doesn't have boost)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; const int buflen=50000*24;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int numprocs, rank, namelen;
</span><br>
<span class="quotelev1">&gt; char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; class Message {
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;  MPI_Request req;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  char buffer[buflen];
</span><br>
<span class="quotelev1">&gt;  int count;
</span><br>
<span class="quotelev1">&gt;  void reset(char val){
</span><br>
<span class="quotelev1">&gt;    memset(buffer,val,sizeof(char)*buflen);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  Message():
</span><br>
<span class="quotelev1">&gt;    count(0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    reset(rank);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  Message(int _count) :
</span><br>
<span class="quotelev1">&gt;    count(_count)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    reset(count+rank+1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  bool preVerify(){
</span><br>
<span class="quotelev1">&gt;    char content=rank;
</span><br>
<span class="quotelev1">&gt;    for(int b=0;b&lt;buflen;b++){
</span><br>
<span class="quotelev1">&gt;      if(buffer[b]!=content){
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;Pre-panic! &quot;&lt;&lt;rank&lt;&lt;&quot; has wrong pre-data (expected  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;(int)content&lt;&lt;&quot;, not &quot;&lt;&lt;(int)buffer[b]&lt;&lt;&quot;) in message &quot;&lt;&lt;count&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; at &quot;&lt;&lt;b&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	for(int bi=max(0,b-5);bi&lt;min(buflen,b+5);bi++)
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; rank &lt;&lt; &quot;&gt;&quot;&lt;&lt; bi &lt;&lt; &quot; = &quot;&lt;&lt; (int)buffer[bi]&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	assert(buffer[b]==content);
</span><br>
<span class="quotelev1">&gt; 	return false;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  bool verify(int r){
</span><br>
<span class="quotelev1">&gt;    char content=count+r+1;
</span><br>
<span class="quotelev1">&gt;    for(int b=0;b&lt;buflen;b++){
</span><br>
<span class="quotelev1">&gt;      if(buffer[b]!=content){
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;Oh noes! &quot;&lt;&lt;rank&lt;&lt;&quot; has wrong data (expected  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;(int)content&lt;&lt;&quot;, not &quot;&lt;&lt;(int)buffer[b]&lt;&lt;&quot;) in message &quot;&lt;&lt;count&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; to/from &quot;&lt;&lt;r&lt;&lt;&quot; at &quot;&lt;&lt;b&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	for(int bi=max(0,b-5);bi&lt;min(buflen,b+5);bi++)
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; rank &lt;&lt; &quot;&gt;&quot;&lt;&lt; bi &lt;&lt; &quot; = &quot;&lt;&lt; (int)buffer[bi]&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	assert(buffer[b]==content);
</span><br>
<span class="quotelev1">&gt; 	return false;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  using namespace std;
</span><br>
<span class="quotelev1">&gt;  long reps=1000;
</span><br>
<span class="quotelev1">&gt;  if(argc&gt;1){ //optionally specify number of repeats on the command  
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt;    reps=atoi(argv[1]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int senders=numprocs/2;
</span><br>
<span class="quotelev1">&gt;  int receivers=numprocs-senders;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  assert(senders&gt;0);
</span><br>
<span class="quotelev1">&gt;  assert(receivers&gt;0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; (&quot;&lt;&lt; getpid()&lt;&lt;&quot;) on  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;processor_name&lt;&lt;&quot; out of &quot;&lt;&lt;numprocs&lt;&lt;&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt;  if(rank&lt;senders){
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; sending &quot;&lt;&lt;reps&lt;&lt;&quot; messages to each  
</span><br>
<span class="quotelev1">&gt; of &quot;&lt;&lt;receivers&lt;&lt;&quot; nodes&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;    vector&lt;list&lt;Message&gt; &gt; sendQs(receivers);
</span><br>
<span class="quotelev1">&gt;    vector&lt;int&gt; counts(receivers,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(int i=0;i&lt;reps;i++){
</span><br>
<span class="quotelev1">&gt;      for(int receiver=0;receiver&lt;receivers;receiver++){
</span><br>
<span class="quotelev1">&gt; 	list&lt;Message&gt; &amp;sendQ=sendQs[receiver];
</span><br>
<span class="quotelev1">&gt; 	int target=receiver+senders;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	sendQ.push_back(Message(counts[receiver]++));
</span><br>
<span class="quotelev1">&gt; 	Message &amp;msg=sendQ.back();
</span><br>
<span class="quotelev1">&gt; 	char content=msg.count+rank+1;
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 	//confirm that everything we're sending hasn't been corrupted
</span><br>
<span class="quotelev1">&gt; 	assert(msg.buffer);
</span><br>
<span class="quotelev1">&gt; 	//	cerr &lt;&lt; rank&lt;&lt; &quot;&gt;Starting send &quot;&lt;&lt;msg.count&lt;&lt;&quot; from  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;((void*)msg.buffer)&lt;&lt;&quot; to &quot;&lt;&lt;receiver&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	msg.verify(rank);
</span><br>
<span class="quotelev1">&gt; 	MPI_Issend(msg.buffer,buflen,MPI_CHAR,target, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;msg.req);
</span><br>
<span class="quotelev1">&gt; 	//	cerr &lt;&lt; rank &lt;&lt; &quot;&gt;:Started send &quot;&lt;&lt;msg.count&lt;&lt;&quot; to  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;receiver&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	//if any messages have finished sending, go ahead and dequeue them
</span><br>
<span class="quotelev1">&gt; 	int f=0;
</span><br>
<span class="quotelev1">&gt; 	for(list&lt;Message&gt;::iterator ite=sendQ.begin();ite!=sendQ.end();){
</span><br>
<span class="quotelev1">&gt; 	  MPI_Test(&amp;ite-&gt;req,&amp;f,&amp;ite-&gt;status);
</span><br>
<span class="quotelev1">&gt; 	  if(f){
</span><br>
<span class="quotelev1">&gt; 	    //	    cerr &lt;&lt; &quot;Send &quot;&lt;&lt;ite-&gt;count&lt;&lt;&quot; to &quot;&lt;&lt;receiver&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; finished. reseting and deleting&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	    //	    ite-&gt;reset(0);
</span><br>
<span class="quotelev1">&gt; 	    list&lt;Message&gt;::iterator j=ite;
</span><br>
<span class="quotelev1">&gt; 	    ++ite;
</span><br>
<span class="quotelev1">&gt; 	    sendQ.erase(j);
</span><br>
<span class="quotelev1">&gt; 	  }else
</span><br>
<span class="quotelev1">&gt; 	    break; //packets should be received in order by receiver, so  
</span><br>
<span class="quotelev1">&gt; can stop if we hit one that hasn't been received yet
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    //wait for remaining sends to finish...
</span><br>
<span class="quotelev1">&gt;    int nodesLeft=0,messageCount=0;
</span><br>
<span class="quotelev1">&gt;    for(int receiver=0;receiver&lt;receivers;receiver++)
</span><br>
<span class="quotelev1">&gt;      if(!sendQs[receiver].empty()){
</span><br>
<span class="quotelev1">&gt; 	nodesLeft++;
</span><br>
<span class="quotelev1">&gt; 	messageCount+=sendQs[receiver].size();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Initial send complete. Waiting for &quot;&lt;&lt;nodesLeft&lt;&lt;&quot; nodes  
</span><br>
<span class="quotelev1">&gt; to finish &quot;&lt;&lt;messageCount&lt;&lt;&quot; messages.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    while(nodesLeft){
</span><br>
<span class="quotelev1">&gt;      for(int receiver=0;receiver&lt;receivers;receiver++){
</span><br>
<span class="quotelev1">&gt; 	list&lt;Message&gt; &amp;sendQ=sendQs[receiver];
</span><br>
<span class="quotelev1">&gt; 	if(!sendQ.empty()){
</span><br>
<span class="quotelev1">&gt; 	  int finished=0;
</span><br>
<span class="quotelev1">&gt; 	  int  
</span><br>
<span class="quotelev1">&gt; ret=MPI_Test(&amp;sendQ.front().req,&amp;finished,&amp;sendQ.front().status);
</span><br>
<span class="quotelev1">&gt; 	  if(finished)
</span><br>
<span class="quotelev1">&gt; 	    sendQ.pop_front();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	  if(sendQ.empty()){//with this message received we've exhausted  
</span><br>
<span class="quotelev1">&gt; this queue
</span><br>
<span class="quotelev1">&gt; 	    nodesLeft--;
</span><br>
<span class="quotelev1">&gt; 	    //	    cout &lt;&lt; &quot;Receiver &quot;&lt;&lt;receiver&lt;&lt;&quot; is done.  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;(nodesLeft)&lt;&lt;&quot; left!&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; cleanup done.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;  }else{
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; receiving. Expecting &quot;&lt;&lt;reps&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; messages from each of &quot;&lt;&lt;senders&lt;&lt;&quot; nodes.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    vector&lt;Message&gt; msgSenders(senders);
</span><br>
<span class="quotelev1">&gt;    for(int si=0;si&lt;senders;si++){ //start all of them receiving
</span><br>
<span class="quotelev1">&gt;      msgSenders[si].preVerify();
</span><br>
<span class="quotelev1">&gt;      MPI_Irecv(msgSenders[si].buffer,buflen,MPI_CHAR,si, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;msgSenders[si].req);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int sendersLeft=senders;
</span><br>
<span class="quotelev1">&gt;    while(sendersLeft){
</span><br>
<span class="quotelev1">&gt;      for(int si=0;si&lt;senders;si++){ //for each sender
</span><br>
<span class="quotelev1">&gt; 	Message &amp;msg=msgSenders[si];
</span><br>
<span class="quotelev1">&gt; 	if(msg.count&gt;=reps)
</span><br>
<span class="quotelev1">&gt; 	  continue; //done with this one
</span><br>
<span class="quotelev1">&gt; 	//see if any messages have been received
</span><br>
<span class="quotelev1">&gt; 	int f=0;
</span><br>
<span class="quotelev1">&gt; 	if(1){ //use tests
</span><br>
<span class="quotelev1">&gt; 	  MPI_Test(&amp;msg.req,&amp;f,&amp;msg.status);
</span><br>
<span class="quotelev1">&gt; 	}else{
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; &quot;Waiting on message &quot;&lt;&lt;msg.count&lt;&lt;&quot; from &quot;&lt;&lt;si&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  MPI_Wait(&amp;msg.req,&amp;msg.status);
</span><br>
<span class="quotelev1">&gt; 	  f=1;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	if(f){ //got data back.
</span><br>
<span class="quotelev1">&gt; 	  if(msg.status.MPI_SOURCE!=si){//it had better have come from who  
</span><br>
<span class="quotelev1">&gt; we were expecting
</span><br>
<span class="quotelev1">&gt; 	    cout &lt;&lt; &quot;Expected message from &quot;&lt;&lt;si&lt;&lt;&quot; but MPI reports it came  
</span><br>
<span class="quotelev1">&gt; from &quot;&lt;&lt;msg.status.MPI_SOURCE&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	  assert(msg.status.MPI_SOURCE==si);
</span><br>
<span class="quotelev1">&gt; 	  char content=si+msg.count+1; //should contain lots of this
</span><br>
<span class="quotelev1">&gt; 	  //	  cout &lt;&lt; &quot;Got message &quot;&lt;&lt;msg.count&lt;&lt;&quot; from &quot;&lt;&lt;si&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  msg.verify(si);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	  //if we're still expecting more, start receiving again
</span><br>
<span class="quotelev1">&gt; 	  msg.count++;
</span><br>
<span class="quotelev1">&gt; 	  if(msg.count&lt;reps){
</span><br>
<span class="quotelev1">&gt; 	    msg.reset(rank);
</span><br>
<span class="quotelev1">&gt; 	    MPI_Irecv(msg.buffer,buflen,MPI_CHAR,si, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;msg.req);
</span><br>
<span class="quotelev1">&gt; 	  }else{
</span><br>
<span class="quotelev1">&gt; 	    sendersLeft--;
</span><br>
<span class="quotelev1">&gt; 	    //	    cout &lt;&lt; &quot;Sender &quot;&lt;&lt;si&lt;&lt;&quot; done. &quot;&lt;&lt;sendersLeft&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; left.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;All messages accounted for!\n&quot;;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(rank==0)
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;All procs done.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;list&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt; //for atoi (in case someone doesn't have boost)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; const int buflen=50000*24;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int numprocs, rank, namelen;
</span><br>
<span class="quotelev1">&gt; char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; class Message {
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;  MPI_Request req;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  char buffer[buflen];
</span><br>
<span class="quotelev1">&gt;  int count;
</span><br>
<span class="quotelev1">&gt;  void reset(char val){
</span><br>
<span class="quotelev1">&gt;    memset(buffer,val,sizeof(char)*buflen);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  Message():
</span><br>
<span class="quotelev1">&gt;    count(0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    reset(rank);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  Message(int _count) :
</span><br>
<span class="quotelev1">&gt;    count(_count)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    reset(count+rank+1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  bool preVerify(){
</span><br>
<span class="quotelev1">&gt;    char content=rank;
</span><br>
<span class="quotelev1">&gt;    for(int b=0;b&lt;buflen;b++){
</span><br>
<span class="quotelev1">&gt;      if(buffer[b]!=content){
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;Pre-panic! &quot;&lt;&lt;rank&lt;&lt;&quot; has wrong pre-data (expected  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;(int)content&lt;&lt;&quot;, not &quot;&lt;&lt;(int)buffer[b]&lt;&lt;&quot;) in message &quot;&lt;&lt;count&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; at &quot;&lt;&lt;b&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	for(int bi=max(0,b-5);bi&lt;min(buflen,b+5);bi++)
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; rank &lt;&lt; &quot;&gt;&quot;&lt;&lt; bi &lt;&lt; &quot; = &quot;&lt;&lt; (int)buffer[bi]&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	assert(buffer[b]==content);
</span><br>
<span class="quotelev1">&gt; 	return false;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  bool verify(int r){
</span><br>
<span class="quotelev1">&gt;    char content=count+r+1;
</span><br>
<span class="quotelev1">&gt;    for(int b=0;b&lt;buflen;b++){
</span><br>
<span class="quotelev1">&gt;      if(buffer[b]!=content){
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;Oh noes! &quot;&lt;&lt;rank&lt;&lt;&quot; has wrong data (expected  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;(int)content&lt;&lt;&quot;, not &quot;&lt;&lt;(int)buffer[b]&lt;&lt;&quot;) in message &quot;&lt;&lt;count&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; to/from &quot;&lt;&lt;r&lt;&lt;&quot; at &quot;&lt;&lt;b&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	for(int bi=max(0,b-5);bi&lt;min(buflen,b+5);bi++)
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; rank &lt;&lt; &quot;&gt;&quot;&lt;&lt; bi &lt;&lt; &quot; = &quot;&lt;&lt; (int)buffer[bi]&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	assert(buffer[b]==content);
</span><br>
<span class="quotelev1">&gt; 	return false;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return true;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  using namespace std;
</span><br>
<span class="quotelev1">&gt;  long reps=1000;
</span><br>
<span class="quotelev1">&gt;  if(argc&gt;1){ //optionally specify number of repeats on the command  
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt;    reps=atoi(argv[1]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int senders=numprocs/2;
</span><br>
<span class="quotelev1">&gt;  int receivers=numprocs-senders;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  assert(senders&gt;0);
</span><br>
<span class="quotelev1">&gt;  assert(receivers&gt;0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; (&quot;&lt;&lt; getpid()&lt;&lt;&quot;) on  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;processor_name&lt;&lt;&quot; out of &quot;&lt;&lt;numprocs&lt;&lt;&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt;  if(rank&lt;senders){
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; sending &quot;&lt;&lt;reps&lt;&lt;&quot; messages to each  
</span><br>
<span class="quotelev1">&gt; of &quot;&lt;&lt;receivers&lt;&lt;&quot; nodes&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;    vector&lt;list&lt;Message&gt; &gt; sendQs(receivers);
</span><br>
<span class="quotelev1">&gt;    vector&lt;int&gt; counts(receivers,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(int i=0;i&lt;reps;i++){
</span><br>
<span class="quotelev1">&gt;      for(int receiver=0;receiver&lt;receivers;receiver++){
</span><br>
<span class="quotelev1">&gt; 	list&lt;Message&gt; &amp;sendQ=sendQs[receiver];
</span><br>
<span class="quotelev1">&gt; 	int target=receiver+senders;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	sendQ.push_back(Message(counts[receiver]++));
</span><br>
<span class="quotelev1">&gt; 	Message &amp;msg=sendQ.back();
</span><br>
<span class="quotelev1">&gt; 	char content=msg.count+rank+1;
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 	//confirm that everything we're sending hasn't been corrupted
</span><br>
<span class="quotelev1">&gt; 	assert(msg.buffer);
</span><br>
<span class="quotelev1">&gt; 	//	cerr &lt;&lt; rank&lt;&lt; &quot;&gt;Starting send &quot;&lt;&lt;msg.count&lt;&lt;&quot; from  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;((void*)msg.buffer)&lt;&lt;&quot; to &quot;&lt;&lt;receiver&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	msg.verify(rank);
</span><br>
<span class="quotelev1">&gt; 	MPI_Ssend(msg.buffer,buflen,MPI_CHAR,target,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	//	cerr &lt;&lt; rank &lt;&lt; &quot;&gt;:Started send &quot;&lt;&lt;msg.count&lt;&lt;&quot; to  
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;receiver&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; cleanup done.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;  }else{
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;Process &quot;&lt;&lt;rank&lt;&lt;&quot; receiving. Expecting &quot;&lt;&lt;reps&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; messages from each of &quot;&lt;&lt;senders&lt;&lt;&quot; nodes.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    vector&lt;Message&gt; msgSenders(senders);
</span><br>
<span class="quotelev1">&gt;    for(int si=0;si&lt;senders;si++){ //start all of them receiving
</span><br>
<span class="quotelev1">&gt;      msgSenders[si].preVerify();
</span><br>
<span class="quotelev1">&gt;      MPI_Irecv(msgSenders[si].buffer,buflen,MPI_CHAR,si, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;msgSenders[si].req);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int sendersLeft=senders;
</span><br>
<span class="quotelev1">&gt;    while(sendersLeft){
</span><br>
<span class="quotelev1">&gt;      for(int si=0;si&lt;senders;si++){ //for each sender
</span><br>
<span class="quotelev1">&gt; 	Message &amp;msg=msgSenders[si];
</span><br>
<span class="quotelev1">&gt; 	if(msg.count&gt;=reps)
</span><br>
<span class="quotelev1">&gt; 	  continue; //done with this one
</span><br>
<span class="quotelev1">&gt; 	//see if any messages have been received
</span><br>
<span class="quotelev1">&gt; 	int f=0;
</span><br>
<span class="quotelev1">&gt; 	if(1){ //use tests
</span><br>
<span class="quotelev1">&gt; 	  MPI_Test(&amp;msg.req,&amp;f,&amp;msg.status);
</span><br>
<span class="quotelev1">&gt; 	}else{
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; &quot;Waiting on message &quot;&lt;&lt;msg.count&lt;&lt;&quot; from &quot;&lt;&lt;si&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  MPI_Wait(&amp;msg.req,&amp;msg.status);
</span><br>
<span class="quotelev1">&gt; 	  f=1;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	if(f){ //got data back.
</span><br>
<span class="quotelev1">&gt; 	  if(msg.status.MPI_SOURCE!=si){//it had better have come from who  
</span><br>
<span class="quotelev1">&gt; we were expecting
</span><br>
<span class="quotelev1">&gt; 	    cout &lt;&lt; &quot;Expected message from &quot;&lt;&lt;si&lt;&lt;&quot; but MPI reports it came  
</span><br>
<span class="quotelev1">&gt; from &quot;&lt;&lt;msg.status.MPI_SOURCE&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	  assert(msg.status.MPI_SOURCE==si);
</span><br>
<span class="quotelev1">&gt; 	  char content=si+msg.count+1; //should contain lots of this
</span><br>
<span class="quotelev1">&gt; 	  //	  cout &lt;&lt; &quot;Got message &quot;&lt;&lt;msg.count&lt;&lt;&quot; from &quot;&lt;&lt;si&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  msg.verify(si);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	  //if we're still expecting more, start receiving again
</span><br>
<span class="quotelev1">&gt; 	  msg.count++;
</span><br>
<span class="quotelev1">&gt; 	  if(msg.count&lt;reps){
</span><br>
<span class="quotelev1">&gt; 	    msg.reset(rank);
</span><br>
<span class="quotelev1">&gt; 	    MPI_Irecv(msg.buffer,buflen,MPI_CHAR,si, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;msg.req);
</span><br>
<span class="quotelev1">&gt; 	  }else{
</span><br>
<span class="quotelev1">&gt; 	    sendersLeft--;
</span><br>
<span class="quotelev1">&gt; 	    //	    cout &lt;&lt; &quot;Sender &quot;&lt;&lt;si&lt;&lt;&quot; done. &quot;&lt;&lt;sendersLeft&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; left.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;All messages accounted for!\n&quot;;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(rank==0)
</span><br>
<span class="quotelev1">&gt;    cout &lt;&lt; &quot;All procs done.&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Previous message:</strong> <a href="9809.php">8mj6tc902_at_[hidden]: "[OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>In reply to:</strong> <a href="9809.php">8mj6tc902_at_[hidden]: "[OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
