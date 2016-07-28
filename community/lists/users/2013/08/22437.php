<?
$subject_val = "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  4 21:26:54 2013" -->
<!-- isoreceived="20130805012654" -->
<!-- sent="Sun, 04 Aug 2013 18:26:46 -0700" -->
<!-- isosent="20130805012646" -->
<!-- name="RoboBeans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="51FEFF56.3060403_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB7328301B5_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.<br>
<strong>From:</strong> RoboBeans (<em>robobeans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-04 21:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22435.php">Elken, Tom: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
<p>As per your suggestion, i tried
<br>
<p>*./configure --with-psm --prefix=/opt/openmpi-1.7.2 
<br>
--enable-event-thread-support --enable-opal-multi-threads 
<br>
--enable-orte-progress-threads --enable-mpi-thread-multiple*
<br>
<p>but I am getting this error:
<br>
<p>--- MCA component mtl:psm (m4 configuration macro)
<br>
checking for MCA component mtl:psm compile mode... dso
<br>
checking --with-psm value... simple ok (unspecified)
<br>
checking --with-psm-libdir value... simple ok (unspecified)
<br>
checking psm.h usability... no
<br>
checking psm.h presence... yes
<br>
configure: WARNING: psm.h: present but cannot be compiled
<br>
configure: WARNING: psm.h:     check for missing prerequisite headers?
<br>
configure: WARNING: psm.h: see the Autoconf documentation
<br>
configure: WARNING: psm.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: psm.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
checking for psm.h... no
<br>
configure: error: PSM support requested but not found.  Aborting
<br>
<p><p>Any feedback will be helpful. Thanks for your time!
<br>
<p>Mr. Beans
<br>
<p><p><p>On 8/4/13 10:31 AM, Elken, Tom wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/3/13 7:09 PM, RoboBeans wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On first 7 nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[mpidemo_at_SERVER-3 ~]$ ofed_info | head -n 1*
</span><br>
<span class="quotelev1">&gt;     OFED-1.5.3.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On last 4 nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[mpidemo_at_sv-2 ~]$ ofed_info | head -n 1*
</span><br>
<span class="quotelev1">&gt;     -bash: ofed_info: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     */[Tom] /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     */This is a pretty good clue that OFED is not installed on the
</span><br>
<span class="quotelev1">&gt;     last 4 nodes.  You should fix that by installing OFED 1.5.3.2 on
</span><br>
<span class="quotelev1">&gt;     the last 4 nodes, OR better (but more work) install a newer OFED
</span><br>
<span class="quotelev1">&gt;     such as 1.5.4.1 or 3.5 on ALL the nodes (You need to look at the
</span><br>
<span class="quotelev1">&gt;     OFED release notes to see if your OS is supported by these OFEDs). /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *//*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     */BTW, since you are using QLogic HCAs, they typically work with
</span><br>
<span class="quotelev1">&gt;     the best performance when using the PSM API to the HCA.  PSM is
</span><br>
<span class="quotelev1">&gt;     part of OFED.  To use this by default with Open MPI, you can build
</span><br>
<span class="quotelev1">&gt;     Open MPI as follows:/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --with-psm --prefix=&lt;install directory&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;     /*With an Open MPI that is already built, you can try to use PSM
</span><br>
<span class="quotelev1">&gt;     as follows:
</span><br>
<span class="quotelev1">&gt;     mpirun ... --mca mtl psm --mca btl ^openib ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[mpidemo_at_sv-2 ~]$ which ofed_info*
</span><br>
<span class="quotelev1">&gt;     /usr/bin/which: no ofed_info in
</span><br>
<span class="quotelev1">&gt;     (/usr/OPENMPI/openmpi-1.7.2/bin:/usr/OPENMPI/openmpi-1.7.2/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/bin/:/usr/lib/:/usr/lib:/usr:/usr/:/bin/:/usr/lib/:/usr/lib:/usr:/usr/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Are there some specific locations where I should look for
</span><br>
<span class="quotelev1">&gt;     ofed_info? How can I make sure that ofed was installed on a node
</span><br>
<span class="quotelev1">&gt;     or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks again!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 8/3/13 5:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Are the ofed versions the same across all the machines? I
</span><br>
<span class="quotelev1">&gt;         would suspect that might be the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Aug 3, 2013, at 4:06 PM, RoboBeans &lt;robobeans_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Ralph, I tried using 1.5.4, 1.6.5 and 1.7.2 (compiled from
</span><br>
<span class="quotelev1">&gt;         source code) with no configuration arguments but I am facing
</span><br>
<span class="quotelev1">&gt;         the same issue. When I run a job using 1.5.4 (installed using
</span><br>
<span class="quotelev1">&gt;         yum), I get warnings but it doesn't affect my output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Example of warning that I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         sv-2.7960ipath_userinit: Mismatched user minor version (12)
</span><br>
<span class="quotelev1">&gt;         and driver minor version (11) while context sharing. Ensure
</span><br>
<span class="quotelev1">&gt;         that driver and library are from the same release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Each system has a QLogic card (&quot;QLE7342-CK dual port IB
</span><br>
<span class="quotelev1">&gt;         card&quot;), with the same OS but different kernel revision no.
</span><br>
<span class="quotelev1">&gt;         (e.g. 2.6.32-358.2.1.el6.x86_64, 2.6.32-358.el6.x86_64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you for your time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 8/3/13 2:05 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hmmm...strange indeed. I would remove those four configure
</span><br>
<span class="quotelev1">&gt;             options and give it a try. That will eliminate all the
</span><br>
<span class="quotelev1">&gt;             obvious things, I would think, though they aren't
</span><br>
<span class="quotelev1">&gt;             generally involved in the issue shown here. Still, worth
</span><br>
<span class="quotelev1">&gt;             taking out potential trouble sources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             What is the connectivity between SERVER-2 and node 100?
</span><br>
<span class="quotelev1">&gt;             Should I assume that the first seven nodes are connected
</span><br>
<span class="quotelev1">&gt;             via one type of interconnect, and the other four are
</span><br>
<span class="quotelev1">&gt;             connected to those seven by another type?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Aug 3, 2013, at 1:30 PM, RoboBeans &lt;robobeans_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks for looking into in Ralph. I modified the hosts
</span><br>
<span class="quotelev1">&gt;             file but I am still getting the same error. Any other
</span><br>
<span class="quotelev1">&gt;             pointers you can think of? The difference between this
</span><br>
<span class="quotelev1">&gt;             1.7.2 installation and 1.5.4 is that I installed 1.5.4
</span><br>
<span class="quotelev1">&gt;             using yum and for 1.7.2, I used the source code and
</span><br>
<span class="quotelev1">&gt;             configured with *--enable-event-thread-support
</span><br>
<span class="quotelev1">&gt;             --enable-opal-multi-threads --enable-orte-progress-threads
</span><br>
<span class="quotelev1">&gt;             --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;             *. Am I missing something here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             *$ cat mpi_hostfile*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev1">&gt;             x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;             x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt;             x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt;             x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt;             x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt;             x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;             x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;             x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;             x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt;             x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             //******************************************************************
</span><br>
<span class="quotelev1">&gt;             *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile
</span><br>
<span class="quotelev1">&gt;             --bynode ./test
</span><br>
<span class="quotelev1">&gt;             *
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0/4
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0/2
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0/5
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0/8
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;             Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0/3
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0/9
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10755] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0/6
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10755] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10755] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10755] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-4:12040] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0/10
</span><br>
<span class="quotelev1">&gt;             [sv-4:12040] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [sv-4:12040] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev1">&gt;             [sv-4:12040] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0/7
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Mapper requested: NULL  Last mapper: round_robin  Mapping
</span><br>
<span class="quotelev1">&gt;             policy: BYNODE Ranking policy: NODE  Binding policy:
</span><br>
<span class="quotelev1">&gt;             NONE[NODE]  Cpu set: NULL  PPR: NULL
</span><br>
<span class="quotelev1">&gt;                  Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev1">&gt;                  Num nodes: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: SERVER-2         Launch id: -1    State: 2
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],0]    Daemon launched: True
</span><br>
<span class="quotelev1">&gt;                  Num slots: 15    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],0]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 0
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-15  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.24         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],1]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 2    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 2    Max slots: 2
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],1]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 1
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.26         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],2]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 14    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 14    Max slots: 14
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],2]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 2
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.28         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],3]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 16    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 16    Max slots: 16
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],3]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 3
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.29         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],4]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 14    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 14    Max slots: 14
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],4]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 4
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.30         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],5]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 16    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 16    Max slots: 16
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],5]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 5
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.41         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],6]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],6]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 6
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.101         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],7]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],7]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 7
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.100         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],8]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],8]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 8
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Data for node: x.x.x.102         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                  Daemon: [[62216,0],9]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                  Num slots: 22    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                  Num slots allocated: 22    Max slots: 22
</span><br>
<span class="quotelev1">&gt;                  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                  Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                  Data for proc: [[62216,1],9]
</span><br>
<span class="quotelev1">&gt;                      Pid: 0    Local rank: 0    Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;             rank: 9
</span><br>
<span class="quotelev1">&gt;                      State: INITIALIZED    Restarts: 0    App_context:
</span><br>
<span class="quotelev1">&gt;             0    Locale: 0-7  Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;             [sv-1:46111] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1/8
</span><br>
<span class="quotelev1">&gt;             [sv-1:46111] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [sv-1:46111] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt;             [sv-1:46111] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10768] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1/6
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10768] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10768] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10768] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08912] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1/0
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08912] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08912] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08912] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27460] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1/2
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27460] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27460] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27460] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11608] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1/4
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11608] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11608] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11608] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02620] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1/5
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02620] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02620] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02620] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-3:08586] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1/9
</span><br>
<span class="quotelev1">&gt;             [sv-3:08586] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [sv-3:08586] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt;             [sv-3:08586] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [sv-2:07736] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1/7
</span><br>
<span class="quotelev1">&gt;             [sv-2:07736] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [sv-2:07736] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt;             [sv-2:07736] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16418] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1/3
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16418] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16418] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16418] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32533] procdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32533] jobdir:
</span><br>
<span class="quotelev1">&gt;             /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32533] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32533] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;               MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;               MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;               MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;               MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;               MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;               MPIR_proctable_size = 10
</span><br>
<span class="quotelev1">&gt;               MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (0, SERVER-2,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8912)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (1, x.x.x.24,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32533)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (2, x.x.x.26,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 27460)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (3, x.x.x.28,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 16418)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (4, x.x.x.29,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 11608)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (5, x.x.x.30,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 2620)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (6, x.x.x.41,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 10768)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (7, x.x.x.101,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7736)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (8, x.x.x.100,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 46111)
</span><br>
<span class="quotelev1">&gt;                 (i, host, exe, pid) = (9, x.x.x.102,
</span><br>
<span class="quotelev1">&gt;             /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8586)
</span><br>
<span class="quotelev1">&gt;             MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt;             MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt;             parallel process is
</span><br>
<span class="quotelev1">&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;             process can
</span><br>
<span class="quotelev1">&gt;             fail during MPI_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt;             configuration or environment
</span><br>
<span class="quotelev1">&gt;             problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;             here's some
</span><br>
<span class="quotelev1">&gt;             additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;             Open MPI
</span><br>
<span class="quotelev1">&gt;             developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               PML add procs failed
</span><br>
<span class="quotelev1">&gt;               --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] *** reported by process
</span><br>
<span class="quotelev1">&gt;             [140393673392129,140389596004352]
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] *** Unknown error
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] *** MPI_ERRORS_ARE_FATAL (processes in
</span><br>
<span class="quotelev1">&gt;             this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:8912] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             An MPI process is aborting at a time when it cannot
</span><br>
<span class="quotelev1">&gt;             guarantee that all
</span><br>
<span class="quotelev1">&gt;             of its peer processes in the job will be killed properly. 
</span><br>
<span class="quotelev1">&gt;             You should
</span><br>
<span class="quotelev1">&gt;             double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;               Local host: SERVER-2
</span><br>
<span class="quotelev1">&gt;               PID:        8912
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [sv-1][[62216,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;             [btl_openib_proc.c:157] ompi_modex_recv failed for peer
</span><br>
<span class="quotelev1">&gt;             [[62216,1],0]
</span><br>
<span class="quotelev1">&gt;             [sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             [sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             At least one pair of MPI processes are unable to reach
</span><br>
<span class="quotelev1">&gt;             each other for
</span><br>
<span class="quotelev1">&gt;             MPI communications.  This means that no Open MPI device
</span><br>
<span class="quotelev1">&gt;             has indicated
</span><br>
<span class="quotelev1">&gt;             that it can be used to communicate between these
</span><br>
<span class="quotelev1">&gt;             processes.  This is
</span><br>
<span class="quotelev1">&gt;             an error; Open MPI requires that all MPI processes be able
</span><br>
<span class="quotelev1">&gt;             to reach
</span><br>
<span class="quotelev1">&gt;             each other.  This error can sometimes be the result of
</span><br>
<span class="quotelev1">&gt;             forgetting to
</span><br>
<span class="quotelev1">&gt;             specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Process 1 ([[62216,1],8]) is on host: sv-1
</span><br>
<span class="quotelev1">&gt;               Process 2 ([[62216,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev1">&gt;               BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [sv-3][[62216,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;             [btl_openib_proc.c:157] ompi_modex_recv failed for peer
</span><br>
<span class="quotelev1">&gt;             [[62216,1],0]
</span><br>
<span class="quotelev1">&gt;             [sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             [sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             MPI_INIT has failed because at least one MPI process is
</span><br>
<span class="quotelev1">&gt;             unreachable
</span><br>
<span class="quotelev1">&gt;             from another.  This *usually* means that an underlying
</span><br>
<span class="quotelev1">&gt;             communication
</span><br>
<span class="quotelev1">&gt;             plugin -- such as a BTL or an MTL -- has either not loaded
</span><br>
<span class="quotelev1">&gt;             or not
</span><br>
<span class="quotelev1">&gt;             allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              * Check the output of ompi_info to see which BTL/MTL
</span><br>
<span class="quotelev1">&gt;             plugins are
</span><br>
<span class="quotelev1">&gt;                available.
</span><br>
<span class="quotelev1">&gt;              * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;              * Set the MCA parameter btl_base_verbose to 100 (or
</span><br>
<span class="quotelev1">&gt;             mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;                if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;                communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [sv-2][[62216,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;             [btl_openib_proc.c:157] ompi_modex_recv failed for peer
</span><br>
<span class="quotelev1">&gt;             [[62216,1],0]
</span><br>
<span class="quotelev1">&gt;             [sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             [sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;             mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [sv-4:12040] sess_dir_finalize: job session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-14:10755] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-6:11595] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-7:02607] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [SERVER-4:27445] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] sess_dir_finalize: proc session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             [sv-3:08575] sess_dir_finalize: job session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] sess_dir_finalize: proc session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             [sv-1:46100] sess_dir_finalize: job session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] sess_dir_finalize: proc session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             [sv-2:07725] sess_dir_finalize: job session dir not empty
</span><br>
<span class="quotelev1">&gt;             - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [SERVER-5:16404] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             [SERVER-3:32517] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 0
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             mpirun has exited due to process rank 6 with PID 10768 on
</span><br>
<span class="quotelev1">&gt;             node x.x.x.41 exiting improperly. There are three reasons
</span><br>
<span class="quotelev1">&gt;             this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             1. this process did not call &quot;init&quot; before exiting, but
</span><br>
<span class="quotelev1">&gt;             others in
</span><br>
<span class="quotelev1">&gt;             the job did. This can cause a job to hang indefinitely
</span><br>
<span class="quotelev1">&gt;             while it waits
</span><br>
<span class="quotelev1">&gt;             for all processes to call &quot;init&quot;. By rule, if one process
</span><br>
<span class="quotelev1">&gt;             calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt;             then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             2. this process called &quot;init&quot;, but exited without calling
</span><br>
<span class="quotelev1">&gt;             &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;             By rule, all processes that call &quot;init&quot; MUST call
</span><br>
<span class="quotelev1">&gt;             &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt;             exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the
</span><br>
<span class="quotelev1">&gt;             mca parameter
</span><br>
<span class="quotelev1">&gt;             orte_create_session_dirs is set to false. In this case,
</span><br>
<span class="quotelev1">&gt;             the run-time cannot
</span><br>
<span class="quotelev1">&gt;             detect that the abort call was an abnormal termination.
</span><br>
<span class="quotelev1">&gt;             Hence, the only
</span><br>
<span class="quotelev1">&gt;             error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;             terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             You can avoid this message by specifying -quiet on the
</span><br>
<span class="quotelev1">&gt;             mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] 6 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;             help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;             &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
</span><br>
<span class="quotelev1">&gt;             messages
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] 9 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;             help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] 9 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;             help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all
</span><br>
<span class="quotelev1">&gt;             killed
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] 2 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;             help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] 2 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;             help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev1">&gt;             [SERVER-2:08907] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;             empty - leaving
</span><br>
<span class="quotelev1">&gt;             exiting with status 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 8/3/13 4:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 It looks like SERVER-2 cannot talk to your x.x.x.100
</span><br>
<span class="quotelev1">&gt;                 machine. I note that you have some entries at the end
</span><br>
<span class="quotelev1">&gt;                 of the hostfile that I don't understand - a list of
</span><br>
<span class="quotelev1">&gt;                 hosts that can be reached? And I see that your
</span><br>
<span class="quotelev1">&gt;                 x.x.x.22 machine isn't on it. Is that SERVER-2 by chance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Our hostfile parsing changed between the release
</span><br>
<span class="quotelev1">&gt;                 series, but I know we never consciously supported the
</span><br>
<span class="quotelev1">&gt;                 syntax you show below where you list capabilities, and
</span><br>
<span class="quotelev1">&gt;                 then re-list the hosts in an apparent attempt to
</span><br>
<span class="quotelev1">&gt;                 filter which ones can actually be used. It is possible
</span><br>
<span class="quotelev1">&gt;                 that the 1.5 series somehow used that to exclude the
</span><br>
<span class="quotelev1">&gt;                 22 machine, and that the 1.7 parser now doesn't do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 If you only include machines you actually intend to
</span><br>
<span class="quotelev1">&gt;                 use in your hostfile, does the 1.7 series work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Aug 3, 2013, at 3:58 AM, RoboBeans
</span><br>
<span class="quotelev1">&gt;                 &lt;robobeans_at_[hidden] &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I have installed openmpi 1.5.4 on 11 node cluster
</span><br>
<span class="quotelev1">&gt;                 using &quot;yum install openmpi openmpi-devel&quot; and
</span><br>
<span class="quotelev1">&gt;                 everything seems to be working fine. For testing I am
</span><br>
<span class="quotelev1">&gt;                 using this test program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ cat test.cpp*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;                 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                   int id, np;
</span><br>
<span class="quotelev1">&gt;                   char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;                   int namelen;
</span><br>
<span class="quotelev1">&gt;                   int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt;                   MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev1">&gt;                   MPI_Get_processor_name (name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   printf (&quot;This is Process %2d out of %2d running on
</span><br>
<span class="quotelev1">&gt;                 host %s\n&quot;, id, np, name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   return (0);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 and my hosts file look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ cat mpi_hostfile*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # The Hostfile for Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # specify number of slots for processes to run locally.
</span><br>
<span class="quotelev1">&gt;                 #localhost slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.16 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.17 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.18 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.1x.19 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.20 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.55 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;                 #x.x.x.56 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev1">&gt;                 x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;                 x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt;                 x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt;                 x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt;                 x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt;                 x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;                 x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;                 x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt;                 x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt;                 x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # The following slave nodes are available to this machine:
</span><br>
<span class="quotelev1">&gt;                 x.x.x.24
</span><br>
<span class="quotelev1">&gt;                 x.x.x.26
</span><br>
<span class="quotelev1">&gt;                 x.x.x.28
</span><br>
<span class="quotelev1">&gt;                 x.x.x.29
</span><br>
<span class="quotelev1">&gt;                 x.x.x.30
</span><br>
<span class="quotelev1">&gt;                 x.x.x.41
</span><br>
<span class="quotelev1">&gt;                 x.x.x.101
</span><br>
<span class="quotelev1">&gt;                 x.x.x.100
</span><br>
<span class="quotelev1">&gt;                 x.x.x.102
</span><br>
<span class="quotelev1">&gt;                 x.x.x.103
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 this is how my .bashrc looks like on each node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ cat ~/.bashrc*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # .bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # Source global definitions
</span><br>
<span class="quotelev1">&gt;                 if [ -f /etc/bashrc ]; then
</span><br>
<span class="quotelev1">&gt;                     . /etc/bashrc
</span><br>
<span class="quotelev1">&gt;                 fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 # User specific aliases and functions
</span><br>
<span class="quotelev1">&gt;                 umask 077
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 export PSM_SHAREDCONTEXTS_MAX=20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 #export PATH=/usr/lib64/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev1">&gt;                 export PATH=/usr/OPENMPI/openmpi-1.7.2/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 #export
</span><br>
<span class="quotelev1">&gt;                 LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;                 export
</span><br>
<span class="quotelev1">&gt;                 LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ mpic++ test.cpp -o test*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ mpirun -d --display-map -np 10 --hostfile
</span><br>
<span class="quotelev1">&gt;                 mpi_hostfile --bynode ./test*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 These nodes are running 2.6.32-358.2.1.el6.x86_64 release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ uname*
</span><br>
<span class="quotelev1">&gt;                 Linux
</span><br>
<span class="quotelev1">&gt;                 *$ uname -r*
</span><br>
<span class="quotelev1">&gt;                 2.6.32-358.2.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;                 *$ cat /etc/issue*
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Now, if I install openmpi 1.7.2 on each node
</span><br>
<span class="quotelev1">&gt;                 separately then I can only use it on either first 7
</span><br>
<span class="quotelev1">&gt;                 nodes or last 4 nodes but not on all of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ gunzip -c openmpi-1.7.2.tar.gz | tar xf -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ cd openmpi-1.7.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2
</span><br>
<span class="quotelev1">&gt;                 --enable-event-thread-support
</span><br>
<span class="quotelev1">&gt;                 --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt;                 --enable-orte-progress-threads
</span><br>
<span class="quotelev1">&gt;                 --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ make all install*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 This is the error message that i am receiving:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 *$ mpirun -d --display-map -np 10 --hostfile
</span><br>
<span class="quotelev1">&gt;                 mpi_hostfile --bynode ./test*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0/4
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0/5
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0/2
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0/8
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt;                 Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0/9
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0/3
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08399] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08399] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08399] top:
</span><br>
<span class="quotelev1">&gt;                 openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08399] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [sv-4:11802] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0/10
</span><br>
<span class="quotelev1">&gt;                 [sv-4:11802] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [sv-4:11802] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev1">&gt;                 [sv-4:11802] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0/7
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Mapper requested: NULL  Last mapper: round_robin 
</span><br>
<span class="quotelev1">&gt;                 Mapping policy: BYNODE  Ranking policy: NODE Binding
</span><br>
<span class="quotelev1">&gt;                 policy: NONE[NODE]  Cpu set: NULL  PPR: NULL
</span><br>
<span class="quotelev1">&gt;                      Num new daemons: 0    New daemon starting vpid
</span><br>
<span class="quotelev1">&gt;                 INVALID
</span><br>
<span class="quotelev1">&gt;                      Num nodes: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: SERVER-2 Launch id: -1    State: 2
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],0]    Daemon launched: True
</span><br>
<span class="quotelev1">&gt;                      Num slots: 15    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],0]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 0
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-15    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.24 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],1]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 3    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 3    Max slots: 2
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],1]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 1
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.26 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],2]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 15    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],2]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 2
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.28 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],3]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 17    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],3]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 3
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.29 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],4]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 15    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],4]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 4
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.30 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],5]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 17    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],5]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 5
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.41 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],6]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 47    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],6]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 6
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.101 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],7]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 47    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],7]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 7
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.100 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],8]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 47    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],8]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 8
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Data for node: x.x.x.102 Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;                      Daemon: [[50535,0],9]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                      Num slots: 23    Slots in use: 1   
</span><br>
<span class="quotelev1">&gt;                 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;                      Num slots allocated: 23    Max slots: 22
</span><br>
<span class="quotelev1">&gt;                      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                      Data for proc: [[50535,1],9]
</span><br>
<span class="quotelev1">&gt;                          Pid: 0    Local rank: 0 Node rank: 0    App
</span><br>
<span class="quotelev1">&gt;                 rank: 9
</span><br>
<span class="quotelev1">&gt;                          State: INITIALIZED Restarts: 0   
</span><br>
<span class="quotelev1">&gt;                 App_context: 0 Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45712] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45712] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45712] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08412] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08412] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08412] top:
</span><br>
<span class="quotelev1">&gt;                 openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08412] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05291] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1/0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05291] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05291] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05291] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15726] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1/2
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15726] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15726] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15726] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09100] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1/4
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09100] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09100] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09100] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32576] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1/5
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32576] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32576] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32576] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08363] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1/9
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08363] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08363] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08363] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07514] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1/7
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07514] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07514] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07514] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12548] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1/3
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12548] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12548] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12548] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:29009] procdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:29009] jobdir:
</span><br>
<span class="quotelev1">&gt;                 /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:29009] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:29009] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;                   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;                   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;                   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;                   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;                   MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;                   MPIR_proctable_size = 10
</span><br>
<span class="quotelev1">&gt;                   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (0, SERVER-2,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (1, x.x.x.24,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (2, x.x.x.26,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (3, x.x.x.28,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (4, x.x.x.29,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (5, x.x.x.30,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (6, x.x.x.41,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (7, x.x.x.101,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (8, x.x.x.100,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
</span><br>
<span class="quotelev1">&gt;                     (i, host, exe, pid) = (9, x.x.x.102,
</span><br>
<span class="quotelev1">&gt;                 /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
</span><br>
<span class="quotelev1">&gt;                 MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt;                 MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt;                 parallel process is
</span><br>
<span class="quotelev1">&gt;                 likely to abort.  There are many reasons that a
</span><br>
<span class="quotelev1">&gt;                 parallel process can
</span><br>
<span class="quotelev1">&gt;                 fail during MPI_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt;                 configuration or environment
</span><br>
<span class="quotelev1">&gt;                 problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt;                 failure; here's some
</span><br>
<span class="quotelev1">&gt;                 additional information (which may only be relevant to
</span><br>
<span class="quotelev1">&gt;                 an Open MPI
</span><br>
<span class="quotelev1">&gt;                 developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   PML add procs failed
</span><br>
<span class="quotelev1">&gt;                   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] *** reported by process
</span><br>
<span class="quotelev1">&gt;                 [140508871983105,140505560121344]
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] *** Unknown error
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in
</span><br>
<span class="quotelev1">&gt;                 this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:5291] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 An MPI process is aborting at a time when it cannot
</span><br>
<span class="quotelev1">&gt;                 guarantee that all
</span><br>
<span class="quotelev1">&gt;                 of its peer processes in the job will be killed
</span><br>
<span class="quotelev1">&gt;                 properly.  You should
</span><br>
<span class="quotelev1">&gt;                 double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;                   Local host: SERVER-2
</span><br>
<span class="quotelev1">&gt;                   PID:        5291
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 [sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;                 [btl_openib_proc.c:157] ompi_modex_recv failed for
</span><br>
<span class="quotelev1">&gt;                 peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt;                 [sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;                 [btl_openib_proc.c:157] ompi_modex_recv failed for
</span><br>
<span class="quotelev1">&gt;                 peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt;                 [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 At least one pair of MPI processes are unable to reach
</span><br>
<span class="quotelev1">&gt;                 each other for
</span><br>
<span class="quotelev1">&gt;                 MPI communications.  This means that no Open MPI
</span><br>
<span class="quotelev1">&gt;                 device has indicated
</span><br>
<span class="quotelev1">&gt;                 that it can be used to communicate between these
</span><br>
<span class="quotelev1">&gt;                 processes.  This is
</span><br>
<span class="quotelev1">&gt;                 an error; Open MPI requires that all MPI processes be
</span><br>
<span class="quotelev1">&gt;                 able to reach
</span><br>
<span class="quotelev1">&gt;                 each other.  This error can sometimes be the result of
</span><br>
<span class="quotelev1">&gt;                 forgetting to
</span><br>
<span class="quotelev1">&gt;                 specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Process 1 ([[50535,1],8]) is on host: sv-1
</span><br>
<span class="quotelev1">&gt;                   Process 2 ([[50535,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev1">&gt;                   BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 MPI_INIT has failed because at least one MPI process
</span><br>
<span class="quotelev1">&gt;                 is unreachable
</span><br>
<span class="quotelev1">&gt;                 from another.  This *usually* means that an underlying
</span><br>
<span class="quotelev1">&gt;                 communication
</span><br>
<span class="quotelev1">&gt;                 plugin -- such as a BTL or an MTL -- has either not
</span><br>
<span class="quotelev1">&gt;                 loaded or not
</span><br>
<span class="quotelev1">&gt;                 allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  * Check the output of ompi_info to see which BTL/MTL
</span><br>
<span class="quotelev1">&gt;                 plugins are
</span><br>
<span class="quotelev1">&gt;                    available.
</span><br>
<span class="quotelev1">&gt;                  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;                  * Set the MCA parameter btl_base_verbose to 100 (or
</span><br>
<span class="quotelev1">&gt;                 mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;                    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;                    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 [sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt;                 [btl_openib_proc.c:157] ompi_modex_recv failed for
</span><br>
<span class="quotelev1">&gt;                 peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt;                 [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create]
</span><br>
<span class="quotelev1">&gt;                 mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-4:11802] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-14:08399] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-6:09087] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-7:32563] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-4:15711] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-3:08352] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-1:45701] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 [sv-2:07503] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev1">&gt;                 empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-5:12534] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 [SERVER-3:28993] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 0
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 mpirun has exited due to process rank 6 with PID 8412 on
</span><br>
<span class="quotelev1">&gt;                 node x.x.x.41 exiting improperly. There are three
</span><br>
<span class="quotelev1">&gt;                 reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 1. this process did not call &quot;init&quot; before exiting,
</span><br>
<span class="quotelev1">&gt;                 but others in
</span><br>
<span class="quotelev1">&gt;                 the job did. This can cause a job to hang indefinitely
</span><br>
<span class="quotelev1">&gt;                 while it waits
</span><br>
<span class="quotelev1">&gt;                 for all processes to call &quot;init&quot;. By rule, if one
</span><br>
<span class="quotelev1">&gt;                 process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt;                 then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 2. this process called &quot;init&quot;, but exited without
</span><br>
<span class="quotelev1">&gt;                 calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;                 By rule, all processes that call &quot;init&quot; MUST call
</span><br>
<span class="quotelev1">&gt;                 &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt;                 exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and
</span><br>
<span class="quotelev1">&gt;                 the mca parameter
</span><br>
<span class="quotelev1">&gt;                 orte_create_session_dirs is set to false. In this
</span><br>
<span class="quotelev1">&gt;                 case, the run-time cannot
</span><br>
<span class="quotelev1">&gt;                 detect that the abort call was an abnormal
</span><br>
<span class="quotelev1">&gt;                 termination. Hence, the only
</span><br>
<span class="quotelev1">&gt;                 error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 This may have caused other processes in the
</span><br>
<span class="quotelev1">&gt;                 application to be
</span><br>
<span class="quotelev1">&gt;                 terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 You can avoid this message by specifying -quiet on the
</span><br>
<span class="quotelev1">&gt;                 mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] 6 more processes have sent help
</span><br>
<span class="quotelev1">&gt;                 message help-mpi-runtime /
</span><br>
<span class="quotelev1">&gt;                 mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;                 &quot;orte_base_help_aggregate&quot; to 0 to see all help /
</span><br>
<span class="quotelev1">&gt;                 error messages
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] 9 more processes have sent help
</span><br>
<span class="quotelev1">&gt;                 message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt;                 unknown handle
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] 9 more processes have sent help
</span><br>
<span class="quotelev1">&gt;                 message help-mpi-runtime.txt / ompi mpi abort:cannot
</span><br>
<span class="quotelev1">&gt;                 guarantee all killed
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] 2 more processes have sent help
</span><br>
<span class="quotelev1">&gt;                 message help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] 2 more processes have sent help
</span><br>
<span class="quotelev1">&gt;                 message help-mpi-runtime /
</span><br>
<span class="quotelev1">&gt;                 mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev1">&gt;                 [SERVER-2:05284] sess_dir_finalize: job session dir
</span><br>
<span class="quotelev1">&gt;                 not empty - leaving
</span><br>
<span class="quotelev1">&gt;                 exiting with status 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 //******************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Any feedback will be helpful. Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Mr. Beans
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22435.php">Elken, Tom: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
