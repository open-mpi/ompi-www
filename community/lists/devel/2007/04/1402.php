<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 18:05:40 2007" -->
<!-- isoreceived="20070404220540" -->
<!-- sent="Wed, 4 Apr 2007 18:05:07 -0400" -->
<!-- isosent="20070404220507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2" -->
<!-- id="F85A38AF-31A2-4D32-BC65-AA8A16661911_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="352455.91090.qm_at_web50110.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 18:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>In reply to:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Believe it or not, the C API for MPI_TEST in OMPI v1.2 is acting more  
<br>
correctly in terms of the MPI standard (even though it is less  
<br>
intuitive for the MPI developer :-( ) -- we had long discussions  
<br>
about this between the OMPI developers, but finally did it the way  
<br>
that the standard said.  Check out MPI-1 section 3.2.5:
<br>
<p>&quot;In general, message passing calls do not modify the value of the  
<br>
error code field of status variables. This field may be updated only  
<br>
by the functions in Section 3.7.5 which return multiple statuses. The  
<br>
field is updated if and only if such function returns with an error  
<br>
code of MPI ERR IN STATUS.
<br>
<p>Rationale. The error field in status is not needed for calls that  
<br>
return only one status, such as MPI WAIT, since that would only  
<br>
duplicate the information returned by the function itself. The  
<br>
current design avoids the additional overhead of setting it, in such  
<br>
cases. The field is needed for calls that return multiple statuses,  
<br>
since each request may have had a different failure. (End of  
<br>
rationale.)&quot;
<br>
<p>It's saying that MPI_TEST (and MPI::Test) should not modify the error  
<br>
field in the status because it would duplicate the information that  
<br>
is returned by the function itself.
<br>
<p>This is somewhat of a quandry because the C++ MPI::Test binding  
<br>
returns bool -- whether the request was completed or not.  So you  
<br>
don't get the integer error status.  Your only option in the C++  
<br>
bindings is to use MPI::ERRORS_THROW_EXCEPTIONS and catch an  
<br>
exception if it is thrown, and get the integer error code from  
<br>
there.  You put in a try{} block in your code, but you never set the  
<br>
MPI::ERRORS_THROW_EXCEPTIONS handler, so it will never be used.
<br>
<p>That being said, your code never resets the default error handler, so  
<br>
if any error occurs, your code will invoke the MPI_ERRORS_ARE_FATAL  
<br>
handler and therefore abort.  So checking the error status is  
<br>
somewhat superfluous in this case.
<br>
<p><p><p>On Apr 4, 2007, at 5:49 PM, Jose Quiroga wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi OpenMPI people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This mail is itself the c++ code that will reproduce
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; bug as run in in a single processor debian machine
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; only TCP messaging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sample program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RUNS in 1.1.2
</span><br>
<span class="quotelev1">&gt; ABORTS in 1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 1.2 aborts during the following assert:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; assert(msg_status.Get_error() == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The suspected bug aborts in 1.2
</span><br>
<span class="quotelev1">&gt; because MPI::Status::Get_error() returns the value of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Status::mpi_status.MPI_ERROR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My best gess is that 1.2 is messing with the C++
</span><br>
<span class="quotelev1">&gt; MPI::Status structure during the MPI_Test call made by
</span><br>
<span class="quotelev1">&gt; MPI::Request::Test(MPI::Status&amp; st) while 1.1.2 left
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; as initialized by C++ and so always returning
</span><br>
<span class="quotelev1">&gt; MPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; when msg_status.Get_error() is called. If that's the
</span><br>
<span class="quotelev1">&gt; case
</span><br>
<span class="quotelev1">&gt; it is worth look at the suspected bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is based on the observation that the c
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Test(MPI_Request *req, int *flag, MPI_Status
</span><br>
<span class="quotelev1">&gt; *stat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sets with garbage 'stat-&gt;MPI_ERROR' after a sucessful
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev1">&gt; insted of setting it with the same value (err_code)
</span><br>
<span class="quotelev1">&gt; returned
</span><br>
<span class="quotelev1">&gt; by the func.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2 config.log.gz attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1.1.2 is NOT attached because the email would
</span><br>
<span class="quotelev1">&gt; exceed 100kb).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JLQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; #include&quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enum msg_tag {
</span><br>
<span class="quotelev1">&gt; 	k_first_tag = 100,
</span><br>
<span class="quotelev1">&gt; 	k_last_tag
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define BUFF_TP			long
</span><br>
<span class="quotelev1">&gt; #define BUFF_MPI_TP		MPI_LONG
</span><br>
<span class="quotelev1">&gt; #define BUFF_SZ			100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define create_buff()
</span><br>
<span class="quotelev1">&gt; ((BUFF_TP*)malloc(sizeof(BUFF_TP) * BUFF_SZ))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void fill_buff(BUFF_TP* buff, BUFF_TP val){
</span><br>
<span class="quotelev1">&gt; 	for(int ii = 0; ii &lt; BUFF_SZ; ii++){
</span><br>
<span class="quotelev1">&gt; 		buff[ii] = val;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bool test_receive(int rk,
</span><br>
<span class="quotelev1">&gt; 				  MPI::Status&amp; msg_status,
</span><br>
<span class="quotelev1">&gt; 				  MPI::Request&amp;	msg_request,
</span><br>
<span class="quotelev1">&gt; 				  int&amp; ended)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	bool resp = msg_request.Test(msg_status);
</span><br>
<span class="quotelev1">&gt; 	if(resp){
</span><br>
<span class="quotelev1">&gt; 		int msg_sz = msg_status.Get_count(BUFF_MPI_TP);
</span><br>
<span class="quotelev1">&gt; 		int msg_from = msg_status.Get_source();
</span><br>
<span class="quotelev1">&gt; 		int msg_tag = msg_status.Get_tag();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 		assert(msg_sz == BUFF_SZ);
</span><br>
<span class="quotelev1">&gt; 		assert(msg_status.Get_error() == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; 		assert(	(msg_tag == k_first_tag) ||
</span><br>
<span class="quotelev1">&gt; 				(msg_tag == k_last_tag));
</span><br>
<span class="quotelev1">&gt; 		if(msg_tag == k_last_tag){
</span><br>
<span class="quotelev1">&gt; 			ended++;
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	return resp;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void	send_all_to(int rk, int num_msgs, BUFF_TP* buff){
</span><br>
<span class="quotelev1">&gt; 	int tag = k_first_tag;
</span><br>
<span class="quotelev1">&gt; 	for(int aa = 1; aa &lt;= num_msgs; aa++){
</span><br>
<span class="quotelev1">&gt; 		if(aa == num_msgs){
</span><br>
<span class="quotelev1">&gt; 			tag = k_last_tag;
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		MPI::COMM_WORLD.Send(buff, BUFF_SZ,
</span><br>
<span class="quotelev1">&gt; 			BUFF_MPI_TP, rk, tag);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	BUFF_TP* out_buff = create_buff();
</span><br>
<span class="quotelev1">&gt; 	BUFF_TP* in_buff = create_buff();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI::Request	request;
</span><br>
<span class="quotelev1">&gt; 	MPI::Status		status;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	int num_msgs = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	int myrank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt; 	int nprocs = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	try{
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	int tag = k_first_tag;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	request = MPI::COMM_WORLD.Irecv(in_buff, BUFF_SZ,
</span><br>
<span class="quotelev1">&gt; 			BUFF_MPI_TP, MPI_ANY_SOURCE, MPI_ANY_TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	int dest_rk = 0;
</span><br>
<span class="quotelev1">&gt; 	int num_ended = 0;
</span><br>
<span class="quotelev1">&gt; 	int num_others = nprocs - 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	fill_buff(in_buff, 0);
</span><br>
<span class="quotelev1">&gt; 	fill_buff(out_buff, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	if(myrank == 0){
</span><br>
<span class="quotelev1">&gt; 		cout &lt;&lt; &quot;input num_msgs:&quot;;
</span><br>
<span class="quotelev1">&gt; 		cin &gt;&gt; num_msgs;
</span><br>
<span class="quotelev1">&gt; 		assert(num_msgs &gt; 0);
</span><br>
<span class="quotelev1">&gt; 		fill_buff(out_buff, num_msgs);
</span><br>
<span class="quotelev1">&gt; 	};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	while((num_ended &lt; num_others) || (dest_rk &lt;
</span><br>
<span class="quotelev1">&gt; nprocs)){
</span><br>
<span class="quotelev1">&gt; 		if(num_ended &lt; num_others){
</span><br>
<span class="quotelev1">&gt; 			bool got_it = test_receive(myrank, status,
</span><br>
<span class="quotelev1">&gt; 				request, num_ended);
</span><br>
<span class="quotelev1">&gt; 			if(got_it &amp;&amp; (num_ended &lt; num_others)){
</span><br>
<span class="quotelev1">&gt; 				request = MPI::COMM_WORLD.Irecv(in_buff, BUFF_SZ,
</span><br>
<span class="quotelev1">&gt; 						BUFF_MPI_TP, MPI_ANY_SOURCE, MPI_ANY_TAG);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 				if(num_msgs == 0){
</span><br>
<span class="quotelev1">&gt; 					assert(myrank &gt; 0);
</span><br>
<span class="quotelev1">&gt; 					num_msgs = in_buff[0];
</span><br>
<span class="quotelev1">&gt; 					assert(num_msgs &gt; 0);
</span><br>
<span class="quotelev1">&gt; 					cout &lt;&lt; &quot;rk=&quot; &lt;&lt; myrank &lt;&lt; &quot; GOT &quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; 						&quot; num_msgs=&quot; &lt;&lt; num_msgs &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 					fill_buff(out_buff, num_msgs);
</span><br>
<span class="quotelev1">&gt; 				}
</span><br>
<span class="quotelev1">&gt; 			}
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		if((num_msgs &gt; 0) &amp;&amp; (dest_rk &lt; nprocs)){
</span><br>
<span class="quotelev1">&gt; 			if(dest_rk != myrank){
</span><br>
<span class="quotelev1">&gt; 				send_all_to(dest_rk, num_msgs, out_buff);
</span><br>
<span class="quotelev1">&gt; 				/*cout &lt;&lt; myrank &lt;&lt; &quot; sended all to rk=&quot;
</span><br>
<span class="quotelev1">&gt; 					&lt;&lt; dest_rk &lt;&lt; &quot; num_msgs=&quot; &lt;&lt; num_msgs
</span><br>
<span class="quotelev1">&gt; 					&lt;&lt; endl;*/
</span><br>
<span class="quotelev1">&gt; 			}
</span><br>
<span class="quotelev1">&gt; 			dest_rk++;
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	} catch(MPI::Exception e) {
</span><br>
<span class="quotelev1">&gt; 		cout &lt;&lt; &quot;MPI::Exception. rk =&quot; &lt;&lt; myrank &lt;&lt; endl &lt;&lt;
</span><br>
<span class="quotelev1">&gt; 			&quot;error_code=&quot; &lt;&lt; e.Get_error_code() &lt;&lt;
</span><br>
<span class="quotelev1">&gt; 			&quot;(&quot; &lt;&lt; e.Get_error_string() &lt;&lt; &quot;)&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 		MPI::COMM_WORLD.Abort(99);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; myrank &lt;&lt; &quot; FINISHED&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.1.2 compile command:
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.1.2/bin/mpic++ -o no_bug_1.1.2
</span><br>
<span class="quotelev1">&gt; status_bug.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.1.2 run command:
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.1.2/bin/mpirun -np 5 -host 127.0.0.1
</span><br>
<span class="quotelev1">&gt; no_bug_1.1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2 compile command:
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.2/bin/mpic++ -o bug_1.2 status_bug.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2 run command:
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.2/bin/mpirun -np 5 -host 127.0.0.1
</span><br>
<span class="quotelev1">&gt; bug_1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2 error output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; input num_msgs:6
</span><br>
<span class="quotelev1">&gt; bug_1.2: status_bug.cpp:82: bool test_receive(int,
</span><br>
<span class="quotelev1">&gt; MPI::Status&amp;, MPI::Request&amp;, int&amp;): Assertion
</span><br>
<span class="quotelev1">&gt; `msg_status.Get_error() == 0' failed.
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] Signal code: User function (kill,
</span><br>
<span class="quotelev1">&gt; sigsend, abort, etc.) (0)
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 0] /lib/libpthread.so.0 [0x4026f8cb]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 1] /lib/libc.so.6 [0x402de6f0]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 2] /lib/libpthread.so.0(raise+0x2b)
</span><br>
<span class="quotelev1">&gt; [0x4026ca7b]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 3] /lib/libc.so.6(gsignal+0x44)
</span><br>
<span class="quotelev1">&gt; [0x402de554]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 4] /lib/libc.so.6(abort+0x178)
</span><br>
<span class="quotelev1">&gt; [0x402dfa88]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 5]
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.6(__assert_fail+0x10f) [0x402d7bbf]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 6]
</span><br>
<span class="quotelev1">&gt; bug_1.2(_Z12test_receiveiRN3MPI6StatusERNS_7RequestERi+0x116)
</span><br>
<span class="quotelev1">&gt; [0x804f3dc]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 7] bug_1.2(main+0x223) [0x804f6f5]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 8]
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.6(__libc_start_main+0xc6) [0x402cae36]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] [ 9]
</span><br>
<span class="quotelev1">&gt; bug_1.2(_ZN3MPI3Win8Set_attrEiPKv+0x121) [0x804f1f1]
</span><br>
<span class="quotelev1">&gt; [aculiar:23799] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 23798 on node
</span><br>
<span class="quotelev1">&gt; 127.0.0.1 exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output of
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.1.2/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                   Prefix: /lib/openmpi-1.1.2
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: webmgr
</span><br>
<span class="quotelev1">&gt;            Configured on: Sun Oct 29 09:49:39 COT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: aculiar.aculiar.com
</span><br>
<span class="quotelev1">&gt;                 Built by: webmgr
</span><br>
<span class="quotelev1">&gt;                 Built on: dom oct 29 12:15:26 COT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: aculiar.aculiar.com
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress:
</span><br>
<span class="quotelev1">&gt; no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: poe (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output of
</span><br>
<span class="quotelev1">&gt; /lib/openmpi-1.2/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                   Prefix: /lib/openmpi-1.2
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Apr  3 18:49:41 COT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: aculiar.aculiar.com
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Apr  3 20:15:23 COT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: aculiar.aculiar.com
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress:
</span><br>
<span class="quotelev1">&gt; no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.3,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt; v1.0,
</span><br>
<span class="quotelev1">&gt;                           Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev1">&gt;                           v1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; It's here! Your new message!
</span><br>
<span class="quotelev1">&gt; Get new email alerts with the free Yahoo! Toolbar.
</span><br>
<span class="quotelev1">&gt; <a href="http://tools.search.yahoo.com/toolbar/features/mail/">http://tools.search.yahoo.com/toolbar/features/mail/</a>
</span><br>
<span class="quotelev1">&gt; &lt;config_1.2.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<li><strong>In reply to:</strong> <a href="1401.php">Jose Quiroga: "[OMPI devel] Sample c++ program runs in 1.1.2 and aborts in 1.2"</a>
<!-- nextthread="start" -->
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
