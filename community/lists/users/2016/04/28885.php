<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 13:48:41 2016" -->
<!-- isoreceived="20160404174841" -->
<!-- sent="Mon, 4 Apr 2016 19:48:18 +0200" -->
<!-- isosent="20160404174818" -->
<!-- name="Xavier Besseron" -->
<!-- email="xavier.besseron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="CAE4G7MJPMr9ag_o7rnjesFsW=Gi1wmpnAgaJMrabRP6ngz52Dg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACPfdUvniLoEmSEfdjMoOsg0wXWRz=--O1U6Sj43wBymSeDFWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault tolerant feature in Open MPI<br>
<strong>From:</strong> Xavier Besseron (<em>xavier.besseron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-04 13:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28765.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Husen,
<br>
<p>Sorry for this late reply.
<br>
I gave a quick try at FTB and I managed to get it to work on my local
<br>
machine.
<br>
I just had to apply this patch to prevent the agent to crash. Maybe this
<br>
was your issue:
<br>
<a href="https://github.com/besserox/ftb/commit/01aa44f5ed34e35429ddf99084395e4e8ba67b7c">https://github.com/besserox/ftb/commit/01aa44f5ed34e35429ddf99084395e4e8ba67b7c</a>
<br>
<p>Here is a (very) quick tutorial:
<br>
<p># Compile FTB (after applying patch)
<br>
./configure --enable-debug --prefix=&quot;${FTB_INSTALL_PATH}&quot;
<br>
make
<br>
make install
<br>
<p># Start server
<br>
export FTB_BSTRAP_SERVER=127.0.0.1
<br>
&quot;${FTB_INSTALL_PATH}/sbin/ftb_database_server&quot;
<br>
<p># Start agent
<br>
export FTB_BSTRAP_SERVER=127.0.0.1
<br>
&quot;${FTB_INSTALL_PATH}/sbin/ftb_agent&quot;
<br>
<p># First check that server and agent are running
<br>
ps aux | grep 'ftb_'
<br>
<p># You should see the 2 processes running
<br>
<p><p><p># Compile examples
<br>
cd components
<br>
./autogen.sh
<br>
./configure --with-ftb=&quot;${FTB_INSTALL_PATH}&quot;
<br>
make
<br>
<p># Start subscriber example
<br>
export FTB_BSTRAP_SERVER=127.0.0.1
<br>
export LD_LIBRARY_PATH=&quot;${FTB_INSTALL_PATH}/lib:${LD_LIBARY_PATH}&quot;
<br>
./examples/ftb_simple_subscriber
<br>
<p><p># Start publisher example
<br>
export FTB_BSTRAP_SERVER=127.0.0.1
<br>
export LD_LIBRARY_PATH=&quot;${FTB_INSTALL_PATH}/lib:${LD_LIBARY_PATH}&quot;
<br>
<p>./examples/ftb_simple_publisher
<br>
<p><p>The subscriber should output something like:
<br>
<p>Caught event: event_space: FTB.FTB_EXAMPLES.SIMPLE, severity: INFO,
<br>
event_name: SIMPLE_EVENT from host: 10.91.2.156 and pid: 9654
<br>
<p><p><p><p>I hope this will help you.
<br>
Unfortunately, FTB (and the CIFTS project) have been discontinued for quite
<br>
some time now, so it will be difficult to get real help on this.
<br>
<p><p>Best regards,
<br>
<p>Xavier
<br>
<p><p><p><p>On Mon, Mar 21, 2016 at 3:52 AM, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Xavier,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I did. I followed the instructions available in that file, especially
</span><br>
<span class="quotelev1">&gt; at sub-section 4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured boot-strap IP using the ./configure options.
</span><br>
<span class="quotelev1">&gt; in front-end node, the boot-strap IP is its IP address because I want to
</span><br>
<span class="quotelev1">&gt; make it as an ftb_database_server.
</span><br>
<span class="quotelev1">&gt; in every compute nodes, the boot-strap IP is the front-end's IP address.
</span><br>
<span class="quotelev1">&gt; finally, I use default values for boot-strap port and agent-port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked MVAPICH authority about this issue along with process migration
</span><br>
<span class="quotelev1">&gt; issue and they said it looks like the feature is broken and they will take
</span><br>
<span class="quotelev1">&gt; a look at it in a low priority due to other on-going activities in the
</span><br>
<span class="quotelev1">&gt; project.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Husen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 20, 2016 at 3:04 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Husen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you check the information in file
</span><br>
<span class="quotelev2">&gt;&gt; ./docs/chapters/01_FTB_on_Linux.txt inside the ftb tarball?
</span><br>
<span class="quotelev2">&gt;&gt; You might want to look at sub-section 4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can also try to get support on this via the MVAPICH2 mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Xavier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 18, 2016 at 11:24 AM, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the reply and valuable informations.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have configured MVAPICH2 using the instructions available in a
</span><br>
<span class="quotelev2">&gt;&gt; resource
</span><br>
<span class="quotelev3">&gt;&gt; &gt; provided by Xavier.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I also have installed FTB (Fault-Tolerant Backplane) in order for
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to have process migration feature.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; however, I got the following error message when I tried to run
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ftb_database_server.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pro_at_head-node:/usr/local/sbin$ ftb_database_server &amp;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [2] 10678
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pro_at_head-node:/usr/local/sbin$
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; [FTB_ERROR][/home/pro/ftb-0.6.2/src/manager_lib/network/network_sock/include/ftb_network_sock.h:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; line 205][hostname:head-node]Cannot find boot-strap server ip address
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error message : &quot;cannot find boot-strap server ip address&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have configured bootstrap ip address when I install FTB.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; does anyone have experience solving this problem when using FTB in Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I need help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Husen
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Fri, Mar 18, 2016 at 12:06 AM, Xavier Besseron &lt;
</span><br>
<span class="quotelev2">&gt;&gt; xavier.besseron_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Thu, Mar 17, 2016 at 3:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Just to clarify: I am not aware of any MPI that will allow you to
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; relocate a
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; process while it is running. You have to checkpoint the job,
</span><br>
<span class="quotelev2">&gt;&gt; terminate
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; it,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; and then restart the entire thing with the desired process on the new
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; node.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For your information, MVAPICH2 supports live migration of MPI
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; processes, without the need to terminate and restart the whole job.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; All the details are in the MVAPICH2 user guide:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   - How to configure MVAPICH2 for migration
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   - How to trigger process migration
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You can also check the paper &quot;High Performance Pipelined Process
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Migration with RDMA&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf">http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Xavier
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Mar 16, 2016, at 3:15 AM, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; In the case of MPI application (not gromacs), How do I relocate MPI
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; application from one node to another node while it is running ?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I'm sorry, as far as I know the ompi-restart command is used to
</span><br>
<span class="quotelev2">&gt;&gt; restart
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; application, based on checkpoint file, once the application already
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; terminated (no longer running).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Husen
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Wed, Mar 16, 2016 at 4:29 PM, Jeff Hammond &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Just checkpoint-restart the app to relocate. The overhead will be
</span><br>
<span class="quotelev2">&gt;&gt; lower
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; than trying to do with MPI.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; On Wednesday, March 16, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; Thanks for the reply.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; After consulting the Gromacs docs, as you suggested, Gromacs
</span><br>
<span class="quotelev2">&gt;&gt; already
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; supports checkpoint/restart. thanks for the suggestion.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; Previously, I asked about checkpoint/restart in Open MPI because I
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; want
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; to checkpoint MPI Application and restart/migrate it while it is
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; running.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; For the example, I run MPI application in node A,B and C in a
</span><br>
<span class="quotelev2">&gt;&gt; cluster
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; I want to migrate process running in node A to other node, let's
</span><br>
<span class="quotelev2">&gt;&gt; say
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; to node
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; C.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; is there a way to do this with open MPI ? thanks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; Husen
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Why do you need OpenMPI to do this? Molecular dynamics
</span><br>
<span class="quotelev2">&gt;&gt; trajectories
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; trivial to checkpoint and restart at the application level. I'm
</span><br>
<span class="quotelev2">&gt;&gt; sure
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Gromacs
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; already supports this. Please consult the Gromacs docs or user
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; support for
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; details.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Dear Open MPI Users,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Does the current stable release of Open MPI (v1.10 series)
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; fault tolerant feature ?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; I got the information from Open MPI FAQ that The
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; support was last released as part of the v1.6 series.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; I just want to make sure about this.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; and by the way, does Open MPI able to checkpoint or restart mpi
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; application/GROMACS automatically ?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Please, I really need help.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Husen
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28710.php">http://www.open-mpi.org/community/lists/users/2016/03/28710.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28731.php">http://www.open-mpi.org/community/lists/users/2016/03/28731.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28742.php">http://www.open-mpi.org/community/lists/users/2016/03/28742.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28752.php">http://www.open-mpi.org/community/lists/users/2016/03/28752.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28759.php">http://www.open-mpi.org/community/lists/users/2016/03/28759.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28765.php">http://www.open-mpi.org/community/lists/users/2016/03/28765.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28765.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
