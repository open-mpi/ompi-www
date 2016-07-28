<?
$subject_val = "Re: [OMPI users] Messages getting lost during transmission (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 12:57:19 2009" -->
<!-- isoreceived="20090909165719" -->
<!-- sent="Wed, 9 Sep 2009 12:57:12 -0400" -->
<!-- isosent="20090909165712" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Messages getting lost during transmission (?)" -->
<!-- id="OFA55A2EE9.28FCB60D-ON8525762C.005CC24A-8525762C.005D2101_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA7CE00.30706_at_kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Messages getting lost during transmission (?)<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 12:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>In reply to:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Reply:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dennis
<br>
<p>In MPI, you must complete every MPI_Isend by MPI_Wait on the request handle
<br>
(or a variant like MPI_Waitall or MPI_Test that returns TRUE).  An
<br>
un-completed MPI_Isend leaves resources tied up.
<br>
<p>I do not know what symptom to expect from OpenMPI with this particular
<br>
application error but the one you describe is plausible.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/09/2009 11:47:12 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [OMPI users] Messages getting lost during transmission (?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dennis Luxen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 09/09/2009 11:48 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very strange behaviour in a program. It seems that messages
</span><br>
<span class="quotelev1">&gt; that are sent from one processor to another are getting lost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is isolated in the attached source code. The code works as
</span><br>
<span class="quotelev1">&gt; follows. Two processess send each other 100k request. Each request is
</span><br>
<span class="quotelev1">&gt; answered and triggers a number of requests to the other process in
</span><br>
<span class="quotelev1">&gt; return. As you might already suspect, the communication is asynchronous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already debugged the application and found that at one point during
</span><br>
<span class="quotelev1">&gt; the communication at least one of the processes does not receive any
</span><br>
<span class="quotelev1">&gt; messages anymore and hangs in the while loop beginning in line 45.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is started with two processes on a single machine and no
</span><br>
<span class="quotelev1">&gt; other parameters: &quot;mpirun -np 2 ./mpi_test2&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Dennis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dennis Luxen
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Karlsruhe (TH)           | Fon  : +49 (721) 608-6781
</span><br>
<span class="quotelev1">&gt; Institut f&#252;r Theoretische Informatik | Fax  : +49 (721) 608-3088
</span><br>
<span class="quotelev1">&gt; Am Fasanengarten 5, Zimmer 220       | WWW  : algo2.ira.uka.de/luxen
</span><br>
<span class="quotelev1">&gt; D-76131 Karlsruhe, Germany           | Email: luxen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fstream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sstream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cassert&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;queue&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;list&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::ofstream output_file;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enum {REQUEST_TAG=4321, ANSWER_TAG, FINISHED_TAG};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef int Answer_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc, &amp;argv);   // starts MPI
</span><br>
<span class="quotelev1">&gt;    int number_of_PEs, my_PE_ID;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;number_of_PEs);
</span><br>
<span class="quotelev1">&gt;    assert(number_of_PEs == 2);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_PE_ID);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    std::srand(123456);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int number_of_requests_to_send = 100000;
</span><br>
<span class="quotelev1">&gt;    int number_of_requests_to_recv = number_of_requests_to_send;
</span><br>
<span class="quotelev1">&gt;    int number_of_answers_to_recv  = number_of_requests_to_send;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    std::stringstream filename;
</span><br>
<span class="quotelev1">&gt;    filename&lt;&lt;&quot;output&quot;&lt;&lt;my_PE_ID&lt;&lt;&quot;.txt&quot;;
</span><br>
<span class="quotelev1">&gt;    output_file.open(filename.str().c_str());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int buffer[100];
</span><br>
<span class="quotelev1">&gt;    MPI_Request dummy_request;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    //Send the first request
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID, REQUEST_TAG,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;dummy_request);
</span><br>
<span class="quotelev1">&gt;    number_of_requests_to_send--;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int working_PEs = number_of_PEs;
</span><br>
<span class="quotelev1">&gt;    bool lack_of_work_sent = false;
</span><br>
<span class="quotelev1">&gt;    bool there_was_change = true;
</span><br>
<span class="quotelev1">&gt;    while(working_PEs &gt; 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;       if(there_was_change)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          there_was_change = false;
</span><br>
<span class="quotelev1">&gt;          std::cout&lt;&lt;my_PE_ID&lt;&lt;&quot;: req_to_recv =
</span><br>
&quot;&lt;&lt;number_of_requests_to_recv
<br>
<span class="quotelev1">&gt;                      &lt;&lt;&quot;, req_to_send = &quot;&lt;&lt;number_of_requests_to_send
</span><br>
<span class="quotelev1">&gt;                      &lt;&lt;&quot;, answers_to_recv = &quot;&lt;&lt;number_of_answers_to_recv
</span><br>
<span class="quotelev1">&gt;                      &lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;          output_file&lt;&lt;my_PE_ID&lt;&lt;&quot;: req_to_recv =
</span><br>
&quot;&lt;&lt;number_of_requests_to_recv
<br>
<span class="quotelev1">&gt;                      &lt;&lt;&quot;, req_to_send = &quot;&lt;&lt;number_of_requests_to_send
</span><br>
<span class="quotelev1">&gt;                      &lt;&lt;&quot;, answers_to_recv = &quot;&lt;&lt;number_of_answers_to_recv
</span><br>
<span class="quotelev1">&gt;                      &lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Status status;
</span><br>
<span class="quotelev1">&gt;       int flag = 1;
</span><br>
<span class="quotelev1">&gt;       int number_of_answer;
</span><br>
<span class="quotelev1">&gt; //      MPI_Probe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;       MPI_Iprobe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD,
</span><br>
&amp;flag,&amp;status);
<br>
<span class="quotelev1">&gt;       if(flag)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          there_was_change = true;
</span><br>
<span class="quotelev1">&gt;          switch(status.MPI_TAG){
</span><br>
<span class="quotelev1">&gt;             case(REQUEST_TAG):
</span><br>
<span class="quotelev1">&gt;                MPI_Recv(buffer, 1, MPI_INT, status.MPI_SOURCE,
</span><br>
<span class="quotelev1">&gt; REQUEST_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                MPI_Isend(buffer, (1&lt;&lt;(std::rand()%5))*sizeof(int),
</span><br>
<span class="quotelev1">&gt; MPI_BYTE, 1-my_PE_ID, ANSWER_TAG, MPI_COMM_WORLD, &amp;dummy_request);
</span><br>
<span class="quotelev1">&gt;                number_of_requests_to_recv--;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;             case(ANSWER_TAG):
</span><br>
<span class="quotelev1">&gt;                number_of_answers_to_recv--;
</span><br>
<span class="quotelev1">&gt;                MPI_Get_count( &amp;status, MPI_BYTE, &amp;number_of_answer);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MPI_Recv(buffer, number_of_answer, MPI_BYTE,
</span><br>
<span class="quotelev1">&gt; status.MPI_SOURCE, ANSWER_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                for(int i = (number_of_answer+3)/4; (i&gt;0)&amp;&amp;
</span><br>
<span class="quotelev1">&gt; (number_of_requests_to_send&gt;0); i--)
</span><br>
<span class="quotelev1">&gt;                {
</span><br>
<span class="quotelev1">&gt;                   MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID,
</span><br>
<span class="quotelev1">&gt; REQUEST_TAG, MPI_COMM_WORLD, &amp;dummy_request);
</span><br>
<span class="quotelev1">&gt;                   number_of_requests_to_send--;
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;             case(FINISHED_TAG):
</span><br>
<span class="quotelev1">&gt;                MPI_Recv(buffer, 1, MPI_INT, status.MPI_SOURCE,
</span><br>
<span class="quotelev1">&gt; FINISHED_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                working_PEs--;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       if((number_of_answers_to_recv == 0) &amp;&amp; (!lack_of_work_sent))
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          there_was_change = true;
</span><br>
<span class="quotelev1">&gt;          MPI_Isend(buffer, 1, MPI_INT, 1-my_PE_ID, FINISHED_TAG,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;dummy_request);
</span><br>
<span class="quotelev1">&gt;          working_PEs--;
</span><br>
<span class="quotelev1">&gt;          lack_of_work_sent = true;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    std::cout&lt;&lt;my_PE_ID&lt;&lt;&quot;: Finished normaly&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI abuild_at_build26 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.3.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.3.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.3.2
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: build26
</span><br>
<span class="quotelev1">&gt;            Configured by: abuild
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue May  5 16:03:55 UTC 2009
</span><br>
<span class="quotelev1">&gt;           Configure host: build26
</span><br>
<span class="quotelev1">&gt;                 Built by: abuild
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue May  5 16:18:52 UTC 2009
</span><br>
<span class="quotelev1">&gt;               Built host: build26
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
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
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
v1.3.2)
<br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>In reply to:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Reply:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
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
