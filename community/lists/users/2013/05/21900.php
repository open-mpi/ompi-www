<?
$subject_val = "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 14:46:20 2013" -->
<!-- isoreceived="20130514184620" -->
<!-- sent="Tue, 14 May 2013 11:46:11 -0700" -->
<!-- isosent="20130514184611" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE" -->
<!-- id="1FC6A56D-A874-43AD-85F4-F4C5855BF641_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7364AB234369D348AE1CEBC1A86132DB949DE6_at_SVLITMX02.shoretel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 14:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem is that comm_accept isn't thread safe in 1.6 series - we have a devel branch that might solve it, but is still under evaluation
<br>
<p><p>On May 14, 2013, at 11:15 AM, Damien Kick &lt;dkick_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm been playing with come code to try and become familiar with
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept and MPI_Comm_connect to implement an MPI
</span><br>
<span class="quotelev1">&gt; client/server.  The code that I have simply sends a single MPI_INT,
</span><br>
<span class="quotelev1">&gt; the client process pid, to the server and then disconnects.  The code
</span><br>
<span class="quotelev1">&gt; that I have works for a few test runs but then on the 2nd or 3rd
</span><br>
<span class="quotelev1">&gt; client connection, the server seems to stop responding and the client
</span><br>
<span class="quotelev1">&gt; spins 100% CPU in the call to MPI_Comm_accept.  Am I doing something
</span><br>
<span class="quotelev1">&gt; wrong in my code?  Thanks in advance for any help.  First, an example
</span><br>
<span class="quotelev1">&gt; run ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In terminal #1, start the name service
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi-server -r ${PREFIX}/var/run/ompi-server/uri.txt
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In terminal #2, start the server code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-server
</span><br>
<span class="quotelev1">&gt; mpi-server pid 41556
</span><br>
<span class="quotelev1">&gt; Opened port 2011758592.0;tcp://10.161.1.73:51113+2011758593.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51114:300
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(&quot;ompi_global_scope&quot;, &quot;true&quot;)
</span><br>
<span class="quotelev1">&gt; Published {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Accepted a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
</span><br>
<span class="quotelev1">&gt; with rank 0 and size 1
</span><br>
<span class="quotelev1">&gt; We detached from the client thread...
</span><br>
<span class="quotelev1">&gt; Waiting for an int...
</span><br>
<span class="quotelev1">&gt; Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Received 41558
</span><br>
<span class="quotelev1">&gt; Disconnecting intercomm
</span><br>
<span class="quotelev1">&gt; Accepted a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
</span><br>
<span class="quotelev1">&gt; with rank 0 and size 1
</span><br>
<span class="quotelev1">&gt; We detached from the client thread...
</span><br>
<span class="quotelev1">&gt; Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;Waiting for an int...
</span><br>
<span class="quotelev1">&gt; 2011758592.0;tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Received 41560
</span><br>
<span class="quotelev1">&gt; Disconnecting intercomm
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In terminal #2, the client runs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
</span><br>
<span class="quotelev1">&gt; mpi-client pid 41558
</span><br>
<span class="quotelev1">&gt; Looking up port for service &quot;mpi-server-example
</span><br>
<span class="quotelev1">&gt; Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Connected to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
</span><br>
<span class="quotelev1">&gt; with rank 0 and size 1
</span><br>
<span class="quotelev1">&gt; Sending to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Disconnecting intercomm
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
</span><br>
<span class="quotelev1">&gt; mpi-client pid 41560
</span><br>
<span class="quotelev1">&gt; Looking up port for service &quot;mpi-server-example
</span><br>
<span class="quotelev1">&gt; Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Connected to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
</span><br>
<span class="quotelev1">&gt; with rank 0 and size 1
</span><br>
<span class="quotelev1">&gt; Sending to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; Disconnecting intercomm
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
</span><br>
<span class="quotelev1">&gt; mpi-client pid 41562
</span><br>
<span class="quotelev1">&gt; Looking up port for service &quot;mpi-server-example
</span><br>
<span class="quotelev1">&gt; Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
</span><br>
<span class="quotelev1">&gt; mpi-client pid 41564
</span><br>
<span class="quotelev1">&gt; Looking up port for service &quot;mpi-server-example
</span><br>
<span class="quotelev1">&gt; Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
</span><br>
<span class="quotelev1">&gt; tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source code for the server is as follows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat src/mpi-server.cc
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_info.hh&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_intercomm.hh&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/scope_exit.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;array&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thread&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    std::clog &lt;&lt; argv[0] &lt;&lt; &quot; pid &quot; &lt;&lt; getpid() &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    shor::seed::Scope_exit finalize(
</span><br>
<span class="quotelev1">&gt;        []() {
</span><br>
<span class="quotelev1">&gt;            if (MPI::Is_initialized()) {
</span><br>
<span class="quotelev1">&gt;                MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        });
</span><br>
<span class="quotelev1">&gt;    const auto required = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;    const auto provided = MPI::Init_thread(argc, argv, required);
</span><br>
<span class="quotelev1">&gt;    if (provided &lt; required) {
</span><br>
<span class="quotelev1">&gt;        std::cerr &lt;&lt; &quot;Error: could not init with MPI_THREAD_MULTIPLE\n&quot;;
</span><br>
<span class="quotelev1">&gt;        return EXIT_FAILURE;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    typedef std::array&lt;char, MPI_MAX_PORT_NAME&gt; Port_name;
</span><br>
<span class="quotelev1">&gt;    Port_name port_name;
</span><br>
<span class="quotelev1">&gt;    MPI::Open_port(MPI_INFO_NULL, port_name.data());
</span><br>
<span class="quotelev1">&gt;    shor::seed::Scope_exit close_port(
</span><br>
<span class="quotelev1">&gt;        [port_name]() {
</span><br>
<span class="quotelev1">&gt;            std::clog &lt;&lt; &quot;Closing port &quot; &lt;&lt; port_name.data() &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt;            MPI::Close_port(port_name.data());
</span><br>
<span class="quotelev1">&gt;        });
</span><br>
<span class="quotelev1">&gt;    std::clog &lt;&lt; &quot;Opened port &quot; &lt;&lt; port_name.data() &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    const std::string service_name = &quot;mpi-server-example&quot;;
</span><br>
<span class="quotelev1">&gt;    const shor::seed::Mpi_info pub_info({{&quot;ompi_global_scope&quot;, &quot;true&quot;}});
</span><br>
<span class="quotelev1">&gt;    MPI::Publish_name(service_name.c_str(), pub_info, port_name.data());
</span><br>
<span class="quotelev1">&gt;    shor::seed::Scope_exit unpublish_name(
</span><br>
<span class="quotelev1">&gt;        [port_name, service_name, &amp;pub_info]() {
</span><br>
<span class="quotelev1">&gt;            std::clog
</span><br>
<span class="quotelev1">&gt;                &lt;&lt; &quot;Unpublishing {\&quot;&quot; &lt;&lt; service_name
</span><br>
<span class="quotelev1">&gt;                &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
</span><br>
<span class="quotelev1">&gt;            MPI::Unpublish_name(
</span><br>
<span class="quotelev1">&gt;                service_name.c_str(), pub_info, port_name.data());
</span><br>
<span class="quotelev1">&gt;        });
</span><br>
<span class="quotelev1">&gt;    std::clog
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;Published {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data()
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;\&quot;}\n&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    while (true) {
</span><br>
<span class="quotelev1">&gt;        std::clog
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; &quot;Waiting to accept a connection on {\&quot;&quot; &lt;&lt; service_name
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
</span><br>
<span class="quotelev1">&gt;        shor::seed::Mpi_intercomm comm(
</span><br>
<span class="quotelev1">&gt;            MPI::COMM_SELF.Accept(port_name.data(), MPI_INFO_NULL, 0));
</span><br>
<span class="quotelev1">&gt;        std::clog
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; &quot;Accepted a connection on {\&quot;&quot; &lt;&lt; service_name
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;} with rank &quot;
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; comm-&gt;Get_rank() &lt;&lt; &quot; and size &quot; &lt;&lt; comm-&gt;Get_size()
</span><br>
<span class="quotelev1">&gt;            &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt;        const auto lambda = [](shor::seed::Mpi_intercomm comm) {
</span><br>
<span class="quotelev1">&gt;            int n;
</span><br>
<span class="quotelev1">&gt;            std::clog &lt;&lt; &quot;Waiting for an int...\n&quot;;
</span><br>
<span class="quotelev1">&gt;            comm-&gt;Recv(&amp;n, 1, MPI_INT, MPI_ANY_SOURCE, 0);
</span><br>
<span class="quotelev1">&gt;            std::clog &lt;&lt; &quot;Received &quot; &lt;&lt; n &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt;        };
</span><br>
<span class="quotelev1">&gt;        std::thread a_thread(lambda, std::move(comm));
</span><br>
<span class="quotelev1">&gt;        a_thread.detach();
</span><br>
<span class="quotelev1">&gt;        std::clog &lt;&lt; &quot;We detached from the client thread...\n&quot;;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The client
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat src/mpi-client.cc
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_intercomm.hh&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/scope_exit.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;array&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    std::clog &lt;&lt; argv[0] &lt;&lt; &quot; pid &quot; &lt;&lt; getpid() &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    shor::seed::Scope_exit finalize(
</span><br>
<span class="quotelev1">&gt;        []() {
</span><br>
<span class="quotelev1">&gt;            if (MPI::Is_initialized()) {
</span><br>
<span class="quotelev1">&gt;                MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        });
</span><br>
<span class="quotelev1">&gt;    const auto required = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;    const auto provided = MPI::Init_thread(argc, argv, required);
</span><br>
<span class="quotelev1">&gt;    if (provided &lt; required) {
</span><br>
<span class="quotelev1">&gt;        std::cerr &lt;&lt; &quot;Error: could not init with MPI_THREAD_MULTIPLE\n&quot;;
</span><br>
<span class="quotelev1">&gt;        return EXIT_FAILURE;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    const std::string service_name = &quot;mpi-server-example&quot;;
</span><br>
<span class="quotelev1">&gt;    std::clog
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;Looking up port for service \&quot;&quot; &lt;&lt; service_name &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt;    std::array&lt;char, MPI_MAX_PORT_NAME&gt; port_name;
</span><br>
<span class="quotelev1">&gt;    MPI::Lookup_name(
</span><br>
<span class="quotelev1">&gt;        service_name.c_str(), MPI_INFO_NULL, port_name.data());
</span><br>
<span class="quotelev1">&gt;    std::clog
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;Found {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data()
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;\&quot;}\n&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    shor::seed::Mpi_intercomm comm(
</span><br>
<span class="quotelev1">&gt;        MPI::COMM_SELF.Connect(port_name.data(), MPI_INFO_NULL, 0));
</span><br>
<span class="quotelev1">&gt;    std::clog
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;Connected to {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot;
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;} with rank &quot; &lt;&lt; comm-&gt;Get_rank()
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot; and size &quot; &lt;&lt; comm-&gt;Get_size() &lt;&lt; '\n';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    std::clog
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; &quot;Sending to {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot;
</span><br>
<span class="quotelev1">&gt;        &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
</span><br>
<span class="quotelev1">&gt;    const int n = getpid();
</span><br>
<span class="quotelev1">&gt;    comm-&gt;Send(&amp;n, 1, MPI_INT, 0, 0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And a few helpers used by both
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat include/seed/mpi_intercomm.hh
</span><br>
<span class="quotelev1">&gt; #ifndef INCLUDE_SEED_MPI_INTERCOMM_HH
</span><br>
<span class="quotelev1">&gt; #define INCLUDE_SEED_MPI_INTERCOMM_HH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/optional.hpp&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace shor {
</span><br>
<span class="quotelev1">&gt; namespace seed {
</span><br>
<span class="quotelev1">&gt; class Mpi_intercomm {
</span><br>
<span class="quotelev1">&gt;    boost::optional&lt;MPI::Intercomm&gt; impl_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;    explicit Mpi_intercomm(MPI::Intercomm impl);
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm(const Mpi_intercomm&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm(Mpi_intercomm&amp;&amp; that);
</span><br>
<span class="quotelev1">&gt;    ~Mpi_intercomm();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm&amp; operator = (const Mpi_intercomm&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm&amp; operator = (Mpi_intercomm&amp;&amp; that);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI::Intercomm* operator -&gt; ();
</span><br>
<span class="quotelev1">&gt;    const MPI::Intercomm* operator -&gt; () const;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    operator MPI::Intercomm() const;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; } // namespace seed
</span><br>
<span class="quotelev1">&gt; } // namespace shor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_intercomm.cc.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; $ cat include/seed/mpi_intercomm.cc.hh
</span><br>
<span class="quotelev1">&gt; #ifndef INCLUDE_SEED_MPI_INTERCOMM_CC_HH
</span><br>
<span class="quotelev1">&gt; #define INCLUDE_SEED_MPI_INTERCOMM_CC_HH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline MPI::Intercomm*
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::operator -&gt; ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    return &amp;(*impl_);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline const MPI::Intercomm*
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::operator -&gt; () const
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    return &amp;(*impl_);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::operator MPI::Intercomm() const
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    return *impl_;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; $ cat src/mpi_intercomm.cc
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_intercomm.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::Mpi_intercomm(
</span><br>
<span class="quotelev1">&gt;    MPI::Intercomm impl)
</span><br>
<span class="quotelev1">&gt;    : impl_(impl)
</span><br>
<span class="quotelev1">&gt; { }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::Mpi_intercomm(
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm&amp;&amp; that)
</span><br>
<span class="quotelev1">&gt;    : impl_(that.impl_)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    that.impl_ = boost::none;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::~Mpi_intercomm()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    if (impl_
</span><br>
<span class="quotelev1">&gt;        &amp;&amp; (*impl_ != MPI::COMM_WORLD) &amp;&amp; (*impl_ != MPI::COMM_SELF))
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        std::clog &lt;&lt; &quot;Disconnecting intercomm\n&quot;;
</span><br>
<span class="quotelev1">&gt;        impl_-&gt;Disconnect();
</span><br>
<span class="quotelev1">&gt;        impl_ = boost::none;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm&amp;
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_intercomm::operator = (
</span><br>
<span class="quotelev1">&gt;    Mpi_intercomm&amp;&amp; that)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    impl_ = that.impl_;
</span><br>
<span class="quotelev1">&gt;    that.impl_ = boost::none;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $ cat include/seed/mpi_info.hh
</span><br>
<span class="quotelev1">&gt; #ifndef INCLUDE_SEED_MPI_INFO_HH
</span><br>
<span class="quotelev1">&gt; #define INCLUDE_SEED_MPI_INFO_HH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;initializer_list&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace shor {
</span><br>
<span class="quotelev1">&gt; namespace seed {
</span><br>
<span class="quotelev1">&gt; class Mpi_info {
</span><br>
<span class="quotelev1">&gt;    MPI::Info impl_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;    typedef std::pair&lt;const char*, const char*&gt; Key_value;
</span><br>
<span class="quotelev1">&gt;    typedef std::initializer_list&lt;Key_value&gt; Init_list;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mpi_info();
</span><br>
<span class="quotelev1">&gt;    explicit Mpi_info(const Init_list&amp; some_values);
</span><br>
<span class="quotelev1">&gt;    Mpi_info(const Mpi_info&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt;    Mpi_info(Mpi_info&amp;&amp;);
</span><br>
<span class="quotelev1">&gt;    ~Mpi_info();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mpi_info&amp; operator = (const Mpi_info&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt;    Mpi_info&amp; operator = (Mpi_info&amp;&amp; that);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    operator MPI::Info() const;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; } // namespace seed
</span><br>
<span class="quotelev1">&gt; } // namespace shor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_info.cc.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; $ cat include/seed/mpi_info.cc.hh
</span><br>
<span class="quotelev1">&gt; #ifndef INCLUDE_SEED_MPI_INFO_CC_HH
</span><br>
<span class="quotelev1">&gt; #define INCLUDE_SEED_MPI_INFO_CC_HH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_info.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline shor::seed::Mpi_info::operator MPI::Info() const
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    return impl_;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; $ cat src/mpi_info.cc
</span><br>
<span class="quotelev1">&gt; #include &quot;seed/mpi_info.hh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;algorithm&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;initializer_list&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info::Mpi_info()
</span><br>
<span class="quotelev1">&gt;    : impl_(MPI::Info::Create())
</span><br>
<span class="quotelev1">&gt; { }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info::Mpi_info(
</span><br>
<span class="quotelev1">&gt;    const Init_list&amp; some_values)
</span><br>
<span class="quotelev1">&gt;    : impl_(MPI::Info::Create())
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    std::for_each(
</span><br>
<span class="quotelev1">&gt;        std::begin(some_values), std::end(some_values),
</span><br>
<span class="quotelev1">&gt;        [this] (const Key_value&amp; one_value) {
</span><br>
<span class="quotelev1">&gt;            std::clog
</span><br>
<span class="quotelev1">&gt;                &lt;&lt; &quot;MPI_Info_set(\&quot;&quot; &lt;&lt; std::get&lt;0&gt;(one_value)
</span><br>
<span class="quotelev1">&gt;                &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; std::get&lt;1&gt;(one_value)
</span><br>
<span class="quotelev1">&gt;                &lt;&lt; &quot;\&quot;)\n&quot;;
</span><br>
<span class="quotelev1">&gt;            impl_.Set(std::get&lt;0&gt;(one_value), std::get&lt;1&gt;(one_value));
</span><br>
<span class="quotelev1">&gt;        });
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info::Mpi_info(Mpi_info&amp;&amp; that)
</span><br>
<span class="quotelev1">&gt;    : impl_(that.impl_)
</span><br>
<span class="quotelev1">&gt; { }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info::~Mpi_info()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    impl_.Free();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info&amp;
</span><br>
<span class="quotelev1">&gt; shor::seed::Mpi_info::operator = (Mpi_info&amp;&amp; that)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    impl_ = that.impl_;
</span><br>
<span class="quotelev1">&gt;    return *this;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $ cat include/seed/scope_exit.hh
</span><br>
<span class="quotelev1">&gt; #ifndef INCLUDE_SEED_SCOPE_EXIT_HH
</span><br>
<span class="quotelev1">&gt; #define INCLUDE_SEED_SCOPE_EXIT_HH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;functional&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace shor {
</span><br>
<span class="quotelev1">&gt; namespace seed {
</span><br>
<span class="quotelev1">&gt; class Scope_exit {
</span><br>
<span class="quotelev1">&gt;    std::function&lt;void()&gt; lambda_;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;    Scope_exit(std::function&lt;void()&gt; lambda) : lambda_(lambda) { }
</span><br>
<span class="quotelev1">&gt;    Scope_exit(const Scope_exit&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt;    ~Scope_exit() { lambda_(); }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Scope_exit&amp; operator = (const Scope_exit&amp; that) = delete;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; } // namespace seed
</span><br>
<span class="quotelev1">&gt; } // namespace shor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here is the output of ompi_info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI dkick_at_Damien-Kicks-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;                          Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r28081
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Feb 19, 2013
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.6.4
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r28081
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Feb 19, 2013
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.6.4
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r28081
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Feb 19, 2013
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.6.4
</span><br>
<span class="quotelev1">&gt;                  Prefix: ${PREFIX}
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-apple-darwin12.3.0
</span><br>
<span class="quotelev1">&gt;          Configure host: Damien-Kicks-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;           Configured by: dkick
</span><br>
<span class="quotelev1">&gt;           Configured on: Thu May  9 21:36:29 CDT 2013
</span><br>
<span class="quotelev1">&gt;          Configure host: Damien-Kicks-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;                Built by: dkick
</span><br>
<span class="quotelev1">&gt;                Built on: Thu May  9 21:53:32 CDT 2013
</span><br>
<span class="quotelev1">&gt;              Built host: Damien-Kicks-MacBook-Pro.local
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.8.0
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++ --std=c++0x
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /sw/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /sw/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;  MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;   Host topology support: yes
</span><br>
<span class="quotelev1">&gt;          MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;     VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;             MCA sysinfo: darwin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments are confidential. If it is not intended for you, please notify the sender, and please erase and ignore the contents.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21901.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
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
