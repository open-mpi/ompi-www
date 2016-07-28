<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 04:26:48 2008" -->
<!-- isoreceived="20081028082648" -->
<!-- sent="Tue, 28 Oct 2008 09:26:42 +0100" -->
<!-- isosent="20081028082642" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="Pine.LNX.4.58.0810280921000.610_at_lxplus237.cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990810271358q3e5c95ado3868e08314e4edd6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Working with a CellBlade cluster<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 04:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7104.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7123.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;You can easily map on a blade an application to run 
<br>
on CPU 0 (resp 1) while using memory banks relevant to CPU 0 (resp 1) with:
<br>
<p>numactl --cpubind=0 --membind=0 app ...
<br>
(resp numactl --cpubind=1 --membind=1 app ...)
<br>
<p>&nbsp;Hope this helps,          Gilbert.
<br>
<p>On Mon, 27 Oct 2008, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; can you update me with the mapping or the way to get it from the OS on the
</span><br>
<span class="quotelev1">&gt; Cell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 23, 2008 at 8:08 PM, Mi Yan &lt;miyan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; I asked the Cell/BE Linux Kernel developer to get the CPU mapping :) The
</span><br>
<span class="quotelev2">&gt; &gt; mapping is fixed in current kernel.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mi
</span><br>
<span class="quotelev2">&gt; &gt; [image: Inactive hide details for &quot;Lenny Verkhovsky&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;lenny.verkhovsky_at_[hidden]&gt;]&quot;Lenny Verkhovsky&quot; &lt;
</span><br>
<span class="quotelev2">&gt; &gt; lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     *&quot;Lenny Verkhovsky&quot; &lt;lenny.verkhovsky_at_[hidden]&gt;*
</span><br>
<span class="quotelev2">&gt; &gt;             Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             10/23/2008 01:52 PM Please respond to
</span><br>
<span class="quotelev2">&gt; &gt;             Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] Working with a CellBlade cluster
</span><br>
<span class="quotelev2">&gt; &gt; According to *
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3*<https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3">https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3*<https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3</a>&gt;very soon,
</span><br>
<span class="quotelev2">&gt; &gt; but you can download trunk version *<a href="http://www.open-mpi.org/svn/*<http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/*<http://www.open-mpi.org/svn/</a>&gt;and check if it works for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; how can you check mapping CPUs by OS , my cat /proc/cpuinfo shows very
</span><br>
<span class="quotelev2">&gt; &gt; little info
</span><br>
<span class="quotelev2">&gt; &gt; # cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt; &gt; processor : 0
</span><br>
<span class="quotelev2">&gt; &gt; cpu : Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev2">&gt; &gt; clock : 3200.000000MHz
</span><br>
<span class="quotelev2">&gt; &gt; revision : 48.0 (pvr 0070 3000)
</span><br>
<span class="quotelev2">&gt; &gt; processor : 1
</span><br>
<span class="quotelev2">&gt; &gt; cpu : Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev2">&gt; &gt; clock : 3200.000000MHz
</span><br>
<span class="quotelev2">&gt; &gt; revision : 48.0 (pvr 0070 3000)
</span><br>
<span class="quotelev2">&gt; &gt; processor : 2
</span><br>
<span class="quotelev2">&gt; &gt; cpu : Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev2">&gt; &gt; clock : 3200.000000MHz
</span><br>
<span class="quotelev2">&gt; &gt; revision : 48.0 (pvr 0070 3000)
</span><br>
<span class="quotelev2">&gt; &gt; processor : 3
</span><br>
<span class="quotelev2">&gt; &gt; cpu : Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev2">&gt; &gt; clock : 3200.000000MHz
</span><br>
<span class="quotelev2">&gt; &gt; revision : 48.0 (pvr 0070 3000)
</span><br>
<span class="quotelev2">&gt; &gt; timebase : 26666666
</span><br>
<span class="quotelev2">&gt; &gt; platform : Cell
</span><br>
<span class="quotelev2">&gt; &gt; machine : CHRP IBM,0793-1RZ
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Oct 23, 2008 at 3:00 PM, Mi Yan &lt;*miyan_at_[hidden]*&lt;miyan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Hi, Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So rank file map will be supported in OpenMPI 1.3? I'm using
</span><br>
<span class="quotelev2">&gt; &gt;    OpenMPI1.2.6 and did not find parameter &quot;rmaps_rank_file_&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;    Do you have idea when OpenMPI 1.3 will be available? OpenMPI 1.3 has
</span><br>
<span class="quotelev2">&gt; &gt;    quite a few features I'm looking for.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Mi
</span><br>
<span class="quotelev2">&gt; &gt;    [image: Inactive hide details for &quot;Lenny Verkhovsky&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;lenny.verkhovsky_at_[hidden]&gt;]&quot;Lenny Verkhovsky&quot; &lt;*
</span><br>
<span class="quotelev2">&gt; &gt;    lenny.verkhovsky_at_[hidden]* &lt;lenny.verkhovsky_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       *&quot;Lenny Verkhovsky&quot; &lt;**lenny.verkhovsky_at_[hidden]*&lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         *&gt;*
</span><br>
<span class="quotelev2">&gt; &gt;                         Sent by: *users-bounces_at_[hidden]*&lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         10/23/2008 05:48 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users &lt;*users_at_[hidden]* &lt;users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  To
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Open MPI Users&quot; &lt;*users_at_[hidden]* &lt;users_at_[hidden]&gt;&gt;cc
</span><br>
<span class="quotelev2">&gt; &gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] Working with a CellBlade cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    If I understand you correctly the most suitable way to do it is by
</span><br>
<span class="quotelev2">&gt; &gt;    paffinity that we have in Open MPI 1.3 and the trank.
</span><br>
<span class="quotelev2">&gt; &gt;    how ever usually OS is distributing processes evenly between sockets by
</span><br>
<span class="quotelev2">&gt; &gt;    it self.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    There still no formal FAQ due to a multiple reasons but you can read
</span><br>
<span class="quotelev2">&gt; &gt;    how to use it in the attached scratch ( there were few name changings of the
</span><br>
<span class="quotelev2">&gt; &gt;    params, so check with ompi_info )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    shared memory is used between processes that share same machine, and
</span><br>
<span class="quotelev2">&gt; &gt;    openib is used between different machines ( hostnames ), no special mca
</span><br>
<span class="quotelev2">&gt; &gt;    params are needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Best Regards
</span><br>
<span class="quotelev2">&gt; &gt;    Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;*
</span><br>
<span class="quotelev2">&gt; &gt;    grodid_at_[hidden]* &lt;grodid_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;       Working with a CellBlade cluster (QS22), the requirement is to have
</span><br>
<span class="quotelev2">&gt; &gt;          one
</span><br>
<span class="quotelev2">&gt; &gt;          instance of the executable running on each socket of the blade
</span><br>
<span class="quotelev2">&gt; &gt;          (there are 2
</span><br>
<span class="quotelev2">&gt; &gt;          sockets). The application is of the 'domain decomposition' type,
</span><br>
<span class="quotelev2">&gt; &gt;          and each
</span><br>
<span class="quotelev2">&gt; &gt;          instance is required to often send/receive data with both the
</span><br>
<span class="quotelev2">&gt; &gt;          remote blades and
</span><br>
<span class="quotelev2">&gt; &gt;          the neighbor socket.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          Question is : which specification must be used for the mca btl
</span><br>
<span class="quotelev2">&gt; &gt;          component
</span><br>
<span class="quotelev2">&gt; &gt;          to force 1) shmem type messages when communicating with this
</span><br>
<span class="quotelev2">&gt; &gt;          neighbor socket,
</span><br>
<span class="quotelev2">&gt; &gt;          while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev2">&gt; &gt;          Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          Also, which debug flags could be used to crosscheck that the
</span><br>
<span class="quotelev2">&gt; &gt;          messages are
</span><br>
<span class="quotelev2">&gt; &gt;          _actually_ going thru the right channel for a given channel,
</span><br>
<span class="quotelev2">&gt; &gt;          please ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          We are currently using OpenMPI 1.2.5 shipped with RHEL5.2
</span><br>
<span class="quotelev2">&gt; &gt;          (ppc64).
</span><br>
<span class="quotelev2">&gt; &gt;          Which version do you think is currently the most optimised for
</span><br>
<span class="quotelev2">&gt; &gt;          these
</span><br>
<span class="quotelev2">&gt; &gt;          processors and problem type ? Should we go towards OpenMPI 1.2.8
</span><br>
<span class="quotelev2">&gt; &gt;          instead ?
</span><br>
<span class="quotelev2">&gt; &gt;          Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          Thanks in advance for your help, Gilbert.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;          users mailing list*
</span><br>
<span class="quotelev2">&gt; &gt;          **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev2">&gt; &gt;          **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        *(See attached file: RANKS_FAQ.doc)*
</span><br>
<span class="quotelev2">&gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    users mailing list*
</span><br>
<span class="quotelev2">&gt; &gt;    **users_at_[hidden]* &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;    users mailing list*
</span><br>
<span class="quotelev2">&gt; &gt;    **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev2">&gt; &gt;    **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7104.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7123.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
