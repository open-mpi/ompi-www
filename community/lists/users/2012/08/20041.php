<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 17:33:20 2012" -->
<!-- isoreceived="20120828213320" -->
<!-- sent="Tue, 28 Aug 2012 14:33:15 -0700" -->
<!-- isosent="20120828213315" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="CANjXV6_DC389g7U0o7yV5f2DjQL1GPAxJS5B1VUnf3SUS82wKQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8804E1E7-BE21-45E6-BA04-C29E897F2F1E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 17:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="19985.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph -
<br>
<p>Thanks for confirming this is possible.  I'm trying this and currently
<br>
failing.  Perhaps there's something I'm missing in the code to make
<br>
this work.  Here are the two instantiations and their outputs:
<br>
<p><span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/budgeb/p4/pseb/external/lib.dev:/usr/local/lib OMPI_MCA_orte_default_hostfile=`pwd`/hostsfile ./master_exe
</span><br>
cannot start slaves... not enough nodes
<br>
<p><span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/budgeb/p4/pseb/external/lib.dev:/usr/local/lib OMPI_MCA_orte_default_hostfile=`pwd`/hostsfile mpirun -n 1 ./master_exe
</span><br>
master spawned 1 slaves...
<br>
slave responding...
<br>
<p><p>The code:
<br>
<p>//master.cpp
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;boost/filesystem.hpp&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char **args) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int worldSize, universeSize, *puniverseSize, flag;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm everyone; //intercomm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;boost::filesystem::path curPath =
<br>
boost::filesystem::absolute(boost::filesystem::current_path());
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::string toRun = (curPath / &quot;slave_exe&quot;).string();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int ret = MPI_Init(&amp;argc, &amp;args);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(ret != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;failed init&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;worldSize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(worldSize != 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;too many masters&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Attr_get(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &amp;puniverseSize, &amp;flag);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(!flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;no universe size&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;universeSize = *puniverseSize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(universeSize == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;cannot start slaves... not enough nodes&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;char *buf = (char*)alloca(toRun.size() + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memcpy(buf, toRun.c_str(), toRun.size());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[toRun.size()] = '\0';
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(buf, MPI_ARGV_NULL, universeSize-1, MPI_INFO_NULL,
<br>
0, MPI_COMM_SELF, &amp;everyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;master spawned &quot; &lt;&lt; universeSize-1 &lt;&lt; &quot; slaves...&quot;
<br>
&lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>//slave.cpp
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **args) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;args);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(parent == MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;slave has no parent&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_remote_size(parent, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(size != 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;parent size is &quot; &lt;&lt; size &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;slave responding...&quot; &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Any ideas?  Thanks for any help.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Wed, Aug 22, 2012 at 9:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It really is just that simple :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2012, at 8:56 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay.  Is there a tutorial or FAQ for setting everything up?  Or is it
</span><br>
<span class="quotelev2">&gt;&gt; really just that simple?  I don't need to run a copy of the orte
</span><br>
<span class="quotelev2">&gt;&gt; server somewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if my current ip is 192.168.0.1,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0 &gt; echo 192.168.0.11 &gt; /tmp/hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 1 &gt; echo 192.168.0.12 &gt;&gt; /tmp/hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 2 &gt; export OMPI_MCA_orte_default_hostfile=/tmp/hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 3 &gt; ./mySpawningExe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point, mySpawningExe will be the master, running on
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.1, and I can have spawned, for example, childExe on
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.11 and 192.168.0.12?  Or childExe1 on 192.168.0.11 and
</span><br>
<span class="quotelev2">&gt;&gt; childExe2 on 192.168.0.12?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 22, 2012 at 7:15 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, that's still true on all 1.3 or above releases. All you need to do is set the hostfile envar so we pick it up:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_orte_default_hostfile=&lt;foo&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 21, 2012, at 7:23 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi.  I know this is an old thread, but I'm curious if there are any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tutorials describing how to set this up?  Is this still available on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; newer open mpi versions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jan 4, 2008 at 7:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Elena
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm copying this to the user list just to correct a mis-statement on my part
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in an earlier message that went there. I had stated that a singleton could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_spawn onto other nodes listed in a hostfile by setting an environmental
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; variable that pointed us to the hostfile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is incorrect in the 1.2 code series. That series does not allow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; singletons to read a hostfile at all. Hence, any comm_spawn done by a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; singleton can only launch child processes on the singleton's local host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This situation has been corrected for the upcoming 1.3 code series. For the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2 series, though, you will have to do it via an mpirun command line.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry for the confusion - I sometimes have too many code families to keep
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; straight in this old mind!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 1/4/08 5:10 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much for the explanations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But I still do not get it running...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the case
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; everything works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the case
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./my_master.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it does not.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I did:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - create my_hostfile and put it in the $HOME/.openmpi/components/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my_hostfile :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bollenstreek slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; octocore01 slots=8  max_slots=8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; octocore02 slots=8  max_slots=8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr000 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr001 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr002 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr003 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr004 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr005 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr006 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr007 slots=2 max_slots=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - setenv OMPI_MCA_rds_hostfile_path my_hostfile (I  put it in .tcshrc and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then source .tcshrc)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - in my_master.cpp I did
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info info1;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_create(&amp;info1);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; char* hostname =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;clstr002,clstr003,clstr005,clstr006,clstr007,octocore01,octocore02&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_set(info1, &quot;host&quot;, hostname);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _intercomm = intracomm.Spawn(&quot;./childexe&quot;, argv1, _nProc, info1, 0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - After I call the executable, I've got this error message
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bollenstreek: &gt; ./my_master
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number of processes to run: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Some of the requested hosts are not included in the current allocation for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the application:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./childexe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The requested hosts were:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clstr002,clstr003,clstr005,clstr006,clstr007,octocore01,octocore02
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --host specification.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [bollenstreek:21443] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communicator/comm_dyn.c at line 608
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Did I miss something?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for help!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Tuesday, December 18, 2007 3:50 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Elena Zhebel; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/18/07 7:35 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot! Now it works!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The solution is to use mpirun -n 1 -hostfile my.hosts *.exe and pass
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Key to the Spawn function!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; One more question: is it necessary to start my &quot;master&quot; program with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No, it isn't necessary - assuming that my_master_host is the first host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; listed in your hostfile! If you are only executing one my_master.exe (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you gave -n 1 to mpirun), then we will automatically map that process onto
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the first host in your hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you want my_master.exe to go on someone other than the first host in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file, then you have to give us the -host option.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are there other possibilities for easy start?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would say just to run ./my_master.exe , but then the master process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; know about the available in the network hosts.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can set the hostfile parameter in your environment instead of on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command line. Just set OMPI_MCA_rds_hostfile_path = my.hosts.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can then just run ./my_master.exe on the host where you want the master
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to reside - everything should work the same.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Just as an FYI: the name of that environmental variable is going to change
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the 1.3 release, but everything will still work the same.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks and regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, December 17, 2007 5:49 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; Elena Zhebel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/17/07 8:19 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using OpenMPI 1.2.3. , compiler glibc232, Linux Suse 10.0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My &quot;master&quot; executable runs only on the one local host, then it spawns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;slaves&quot; (with MPI::Intracomm::Spawn).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My question was: how to determine the hosts where these &quot;slaves&quot; will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawned?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You said: &quot;You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in the original hostfile&quot;. How can I specify the host file? I can not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; find it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in the documentation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm...sorry about the lack of documentation. I always assumed that the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; folks in the project would document such things since it has little to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the underlying run-time, but I guess that fell through the cracks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There are two parts to your question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. how to specify the hosts to be used for the entire job. I believe that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; somewhat covered here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That FAQ tells you what a hostfile should look like, though you may already
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; know that. Basically, we require that you list -all- of the nodes that both
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; your master and slave programs will use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. how to specify which nodes are available for the master, and which for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the slave.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You would specify the host for your master on the mpirun command line with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This directs Open MPI to map that specified executable on the specified
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - note that my_master_host must have been in my_hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; your slave to execute upon. Those hosts must have been included in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We don't currently support providing a hostfile for the slaves (as opposed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the host-at-a-time string above). This may become available in a future
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; release - TBD.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks and regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, December 17, 2007 3:31 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/12/07 5:46 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm working on a MPI application where I'm using OpenMPI instead of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPICH.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; network as expected. But now I need to spawn processes over the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; network
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure from your description exactly what you are trying to do,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nor in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; what environment this is all operating within or what version of Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you are using. Setting aside the environment and version issue, I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; guessing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that you are running your executable over some specified set of hosts,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to provide a different hostfile that specifies the hosts to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; used for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &quot;slave&quot; processes. Correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If that is correct, then I'm afraid you can't do that in any version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI today. You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in the original hostfile. You can then specify a subset of those hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; used by your original &quot;master&quot; program, and then specify a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be used by the &quot;slaves&quot; when calling Spawn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But the system requires that you tell it -all- of the hosts that are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; going
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be used at the beginning of the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; At the moment, there is no plan to remove that requirement, though
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; there has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; been occasional discussion about doing so at some point in the future.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; promises that it will happen, though - managed environments, in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; particular,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; currently object to the idea of changing the allocation on-the-fly. We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; may,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; though, make a provision for purely hostfile-based environments (i.e.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unmanaged) at some time in the future.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20040.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="19985.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Reply:</strong> <a href="20042.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
