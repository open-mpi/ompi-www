<?
$subject_val = "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 14:15:35 2013" -->
<!-- isoreceived="20130514181535" -->
<!-- sent="Tue, 14 May 2013 18:15:31 +0000" -->
<!-- isosent="20130514181531" -->
<!-- name="Damien Kick" -->
<!-- email="dkick_at_[hidden]" -->
<!-- subject="[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE" -->
<!-- id="7364AB234369D348AE1CEBC1A86132DB949DE6_at_SVLITMX02.shoretel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Damien Kick (<em>dkick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 14:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm been playing with come code to try and become familiar with
<br>
MPI_Comm_accept and MPI_Comm_connect to implement an MPI
<br>
client/server.  The code that I have simply sends a single MPI_INT,
<br>
the client process pid, to the server and then disconnects.  The code
<br>
that I have works for a few test runs but then on the 2nd or 3rd
<br>
client connection, the server seems to stop responding and the client
<br>
spins 100% CPU in the call to MPI_Comm_accept.  Am I doing something
<br>
wrong in my code?  Thanks in advance for any help.  First, an example
<br>
run ...
<br>
<p>In terminal #1, start the name service
<br>
<p>$ ompi-server -r ${PREFIX}/var/run/ompi-server/uri.txt
<br>
$
<br>
<p>In terminal #2, start the server code
<br>
<p>$ mpirun -mca btl tcp,sm,self \
<br>
--ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-server
<br>
mpi-server pid 41556
<br>
Opened port 2011758592.0;tcp://10.161.1.73:51113+2011758593.0;\
<br>
tcp://10.161.1.73:51114:300
<br>
MPI_Info_set(&quot;ompi_global_scope&quot;, &quot;true&quot;)
<br>
Published {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Accepted a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
<br>
with rank 0 and size 1
<br>
We detached from the client thread...
<br>
Waiting for an int...
<br>
Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Received 41558
<br>
Disconnecting intercomm
<br>
Accepted a connection on {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
<br>
with rank 0 and size 1
<br>
We detached from the client thread...
<br>
Waiting to accept a connection on {&quot;mpi-server-example&quot;, &quot;Waiting for an int...
<br>
2011758592.0;tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Received 41560
<br>
Disconnecting intercomm
<br>
^Cmpirun: killing job...
<br>
<p>In terminal #2, the client runs
<br>
<p>$ mpirun -mca btl tcp,sm,self \
<br>
--ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
<br>
mpi-client pid 41558
<br>
Looking up port for service &quot;mpi-server-example
<br>
Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Connected to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
<br>
with rank 0 and size 1
<br>
Sending to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Disconnecting intercomm
<br>
$ mpirun -mca btl tcp,sm,self \
<br>
--ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
<br>
mpi-client pid 41560
<br>
Looking up port for service &quot;mpi-server-example
<br>
Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Connected to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;} \
<br>
with rank 0 and size 1
<br>
Sending to {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
Disconnecting intercomm
<br>
$ mpirun -mca btl tcp,sm,self \
<br>
--ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
<br>
mpi-client pid 41562
<br>
Looking up port for service &quot;mpi-server-example
<br>
Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
^Cmpirun: killing job...
<br>
<p>$ mpirun -mca btl tcp,sm,self \
<br>
--ompi-server file:${PREFIX}/var/run/ompi-server/uri.txt mpi-client
<br>
mpi-client pid 41564
<br>
Looking up port for service &quot;mpi-server-example
<br>
Found {&quot;mpi-server-example&quot;, &quot;2011758592.0;\
<br>
tcp://10.161.1.73:51113+2011758593.0;tcp://10.161.1.73:51114:300&quot;}
<br>
^Cmpirun: killing job...
<br>
<p>The source code for the server is as follows
<br>
<p>$ cat src/mpi-server.cc
<br>
#include &quot;seed/mpi_info.hh&quot;
<br>
#include &quot;seed/mpi_intercomm.hh&quot;
<br>
#include &quot;seed/scope_exit.hh&quot;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;array&gt;
<br>
#include &lt;cstdlib&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;ostream&gt;
<br>
#include &lt;string&gt;
<br>
#include &lt;thread&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; argv[0] &lt;&lt; &quot; pid &quot; &lt;&lt; getpid() &lt;&lt; '\n';
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Scope_exit finalize(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[]() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI::Is_initialized()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const auto required = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const auto provided = MPI::Init_thread(argc, argv, required);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (provided &lt; required) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Error: could not init with MPI_THREAD_MULTIPLE\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_FAILURE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;typedef std::array&lt;char, MPI_MAX_PORT_NAME&gt; Port_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Port_name port_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Open_port(MPI_INFO_NULL, port_name.data());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Scope_exit close_port(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[port_name]() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;Closing port &quot; &lt;&lt; port_name.data() &lt;&lt; '\n';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Close_port(port_name.data());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;Opened port &quot; &lt;&lt; port_name.data() &lt;&lt; '\n';
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;const std::string service_name = &quot;mpi-server-example&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const shor::seed::Mpi_info pub_info({{&quot;ompi_global_scope&quot;, &quot;true&quot;}});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Publish_name(service_name.c_str(), pub_info, port_name.data());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Scope_exit unpublish_name(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[port_name, service_name, &amp;pub_info]() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Unpublishing {\&quot;&quot; &lt;&lt; service_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Unpublish_name(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;service_name.c_str(), pub_info, port_name.data());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Published {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;}\n&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while (true) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Waiting to accept a connection on {\&quot;&quot; &lt;&lt; service_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Mpi_intercomm comm(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_SELF.Accept(port_name.data(), MPI_INFO_NULL, 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Accepted a connection on {\&quot;&quot; &lt;&lt; service_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;} with rank &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; comm-&gt;Get_rank() &lt;&lt; &quot; and size &quot; &lt;&lt; comm-&gt;Get_size()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; '\n';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const auto lambda = [](shor::seed::Mpi_intercomm comm) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;Waiting for an int...\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;Recv(&amp;n, 1, MPI_INT, MPI_ANY_SOURCE, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;Received &quot; &lt;&lt; n &lt;&lt; '\n';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::thread a_thread(lambda, std::move(comm));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a_thread.detach();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;We detached from the client thread...\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
$
<br>
<p>The client
<br>
<p>$ cat src/mpi-client.cc
<br>
#include &quot;seed/mpi_intercomm.hh&quot;
<br>
#include &quot;seed/scope_exit.hh&quot;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;array&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;ostream&gt;
<br>
#include &lt;string&gt;
<br>
<p>#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; argv[0] &lt;&lt; &quot; pid &quot; &lt;&lt; getpid() &lt;&lt; '\n';
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Scope_exit finalize(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[]() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI::Is_initialized()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const auto required = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const auto provided = MPI::Init_thread(argc, argv, required);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (provided &lt; required) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Error: could not init with MPI_THREAD_MULTIPLE\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_FAILURE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;const std::string service_name = &quot;mpi-server-example&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Looking up port for service \&quot;&quot; &lt;&lt; service_name &lt;&lt; '\n';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::array&lt;char, MPI_MAX_PORT_NAME&gt; port_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Lookup_name(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;service_name.c_str(), MPI_INFO_NULL, port_name.data());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Found {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; port_name.data()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;}\n&quot;;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;shor::seed::Mpi_intercomm comm(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_SELF.Connect(port_name.data(), MPI_INFO_NULL, 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Connected to {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;} with rank &quot; &lt;&lt; comm-&gt;Get_rank()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot; and size &quot; &lt;&lt; comm-&gt;Get_size() &lt;&lt; '\n';
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Sending to {\&quot;&quot; &lt;&lt; service_name &lt;&lt; &quot;\&quot;, \&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; port_name.data() &lt;&lt; &quot;\&quot;}\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int n = getpid();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;Send(&amp;n, 1, MPI_INT, 0, 0);
<br>
}
<br>
$
<br>
<p>And a few helpers used by both
<br>
<p>$ cat include/seed/mpi_intercomm.hh
<br>
#ifndef INCLUDE_SEED_MPI_INTERCOMM_HH
<br>
#define INCLUDE_SEED_MPI_INTERCOMM_HH
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;boost/optional.hpp&gt;
<br>
<p>namespace shor {
<br>
namespace seed {
<br>
class Mpi_intercomm {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;boost::optional&lt;MPI::Intercomm&gt; impl_;
<br>
<p>public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;explicit Mpi_intercomm(MPI::Intercomm impl);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm(const Mpi_intercomm&amp; that) = delete;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm(Mpi_intercomm&amp;&amp; that);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;~Mpi_intercomm();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm&amp; operator = (const Mpi_intercomm&amp; that) = delete;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm&amp; operator = (Mpi_intercomm&amp;&amp; that);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Intercomm* operator -&gt; ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Intercomm* operator -&gt; () const;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;operator MPI::Intercomm() const;
<br>
};
<br>
<p>} // namespace seed
<br>
} // namespace shor
<br>
<p>#include &quot;seed/mpi_intercomm.cc.hh&quot;
<br>
<p>#endif
<br>
$ cat include/seed/mpi_intercomm.cc.hh
<br>
#ifndef INCLUDE_SEED_MPI_INTERCOMM_CC_HH
<br>
#define INCLUDE_SEED_MPI_INTERCOMM_CC_HH
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>inline MPI::Intercomm*
<br>
shor::seed::Mpi_intercomm::operator -&gt; ()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return &amp;(*impl_);
<br>
}
<br>
<p>inline const MPI::Intercomm*
<br>
shor::seed::Mpi_intercomm::operator -&gt; () const
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return &amp;(*impl_);
<br>
}
<br>
<p>inline
<br>
shor::seed::Mpi_intercomm::operator MPI::Intercomm() const
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return *impl_;
<br>
}
<br>
<p>#endif
<br>
$ cat src/mpi_intercomm.cc
<br>
#include &quot;seed/mpi_intercomm.hh&quot;
<br>
<p>shor::seed::Mpi_intercomm::Mpi_intercomm(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Intercomm impl)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;: impl_(impl)
<br>
{ }
<br>
<p>shor::seed::Mpi_intercomm::Mpi_intercomm(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm&amp;&amp; that)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;: impl_(that.impl_)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that.impl_ = boost::none;
<br>
}
<br>
<p>shor::seed::Mpi_intercomm::~Mpi_intercomm()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (impl_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; (*impl_ != MPI::COMM_WORLD) &amp;&amp; (*impl_ != MPI::COMM_SELF))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog &lt;&lt; &quot;Disconnecting intercomm\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;impl_-&gt;Disconnect();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;impl_ = boost::none;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>shor::seed::Mpi_intercomm&amp;
<br>
shor::seed::Mpi_intercomm::operator = (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_intercomm&amp;&amp; that)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;impl_ = that.impl_;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that.impl_ = boost::none;
<br>
}
<br>
$ cat include/seed/mpi_info.hh
<br>
#ifndef INCLUDE_SEED_MPI_INFO_HH
<br>
#define INCLUDE_SEED_MPI_INFO_HH
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;initializer_list&gt;
<br>
<p>namespace shor {
<br>
namespace seed {
<br>
class Mpi_info {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Info impl_;
<br>
<p>public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;typedef std::pair&lt;const char*, const char*&gt; Key_value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;typedef std::initializer_list&lt;Key_value&gt; Init_list;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mpi_info();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;explicit Mpi_info(const Init_list&amp; some_values);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_info(const Mpi_info&amp; that) = delete;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_info(Mpi_info&amp;&amp;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;~Mpi_info();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mpi_info&amp; operator = (const Mpi_info&amp; that) = delete;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mpi_info&amp; operator = (Mpi_info&amp;&amp; that);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;operator MPI::Info() const;
<br>
};
<br>
<p>} // namespace seed
<br>
} // namespace shor
<br>
<p>#include &quot;seed/mpi_info.cc.hh&quot;
<br>
<p>#endif
<br>
$ cat include/seed/mpi_info.cc.hh
<br>
#ifndef INCLUDE_SEED_MPI_INFO_CC_HH
<br>
#define INCLUDE_SEED_MPI_INFO_CC_HH
<br>
<p>#include &quot;seed/mpi_info.hh&quot;
<br>
<p>inline shor::seed::Mpi_info::operator MPI::Info() const
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return impl_;
<br>
}
<br>
<p>#endif
<br>
$ cat src/mpi_info.cc
<br>
#include &quot;seed/mpi_info.hh&quot;
<br>
<p>#include &lt;algorithm&gt;
<br>
#include &lt;initializer_list&gt;
<br>
<p>shor::seed::Mpi_info::Mpi_info()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;: impl_(MPI::Info::Create())
<br>
{ }
<br>
<p>shor::seed::Mpi_info::Mpi_info(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Init_list&amp; some_values)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;: impl_(MPI::Info::Create())
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::for_each(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::begin(some_values), std::end(some_values),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[this] (const Key_value&amp; one_value) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::clog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;MPI_Info_set(\&quot;&quot; &lt;&lt; std::get&lt;0&gt;(one_value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;, \&quot;&quot; &lt;&lt; std::get&lt;1&gt;(one_value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;\&quot;)\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;impl_.Set(std::get&lt;0&gt;(one_value), std::get&lt;1&gt;(one_value));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
<br>
}
<br>
<p>shor::seed::Mpi_info::Mpi_info(Mpi_info&amp;&amp; that)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;: impl_(that.impl_)
<br>
{ }
<br>
<p>shor::seed::Mpi_info::~Mpi_info()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;impl_.Free();
<br>
}
<br>
<p>shor::seed::Mpi_info&amp;
<br>
shor::seed::Mpi_info::operator = (Mpi_info&amp;&amp; that)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;impl_ = that.impl_;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return *this;
<br>
}
<br>
$ cat include/seed/scope_exit.hh
<br>
#ifndef INCLUDE_SEED_SCOPE_EXIT_HH
<br>
#define INCLUDE_SEED_SCOPE_EXIT_HH
<br>
<p>#include &lt;functional&gt;
<br>
<p>namespace shor {
<br>
namespace seed {
<br>
class Scope_exit {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::function&lt;void()&gt; lambda_;
<br>
<p>public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Scope_exit(std::function&lt;void()&gt; lambda) : lambda_(lambda) { }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Scope_exit(const Scope_exit&amp; that) = delete;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;~Scope_exit() { lambda_(); }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Scope_exit&amp; operator = (const Scope_exit&amp; that) = delete;
<br>
};
<br>
<p>} // namespace seed
<br>
} // namespace shor
<br>
<p>#endif
<br>
$
<br>
<p>And here is the output of ompi_info
<br>
<p>$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI dkick_at_Damien-Kicks-MacBook-Pro.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r28081
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Feb 19, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.6.4
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r28081
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Feb 19, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.6.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r28081
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Feb 19, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.6.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: ${PREFIX}
<br>
&nbsp;Configured architecture: x86_64-apple-darwin12.3.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: Damien-Kicks-MacBook-Pro.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: dkick
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu May  9 21:36:29 CDT 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: Damien-Kicks-MacBook-Pro.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: dkick
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu May  9 21:53:32 CDT 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: Damien-Kicks-MacBook-Pro.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;C compiler family name: GNU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.8.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++ --std=c++0x
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /sw/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /sw/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: yes, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;Host topology support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sysinfo: darwin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
<br>
$
<br>
<p><p>________________________________
<br>
<p>This e-mail and any attachments are confidential. If it is not intended for you, please notify the sender, and please erase and ignore the contents.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
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
