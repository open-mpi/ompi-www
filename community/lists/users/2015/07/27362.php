<?
$subject_val = "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 16:10:51 2015" -->
<!-- isoreceived="20150730201051" -->
<!-- sent="Thu, 30 Jul 2015 14:10:48 -0600" -->
<!-- isosent="20150730201048" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7" -->
<!-- id="20150730201048.GC56782_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83DE153D-BAF7-4DD0-96F5-4DBB6BF3A3C4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 16:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27361.php">Shahzeb: "[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4"</a>
<li><strong>In reply to:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with Ralph. Please run again with --enable-debug. That will give
<br>
more information (line number) on where the error is occuring.
<br>
<p>Looking at the function in question the only place I see that could be
<br>
causing this warning is the call to strlen. Some implementations of
<br>
strlen use operate on larger chunks (4 or 8 bytes). This will make
<br>
valgrind unhappy but does not make the implementation invalid as no read
<br>
will cross a page boundary (so no SEGV). One example of such a strlen
<br>
implementation is the one used by icc which uses vector operations on
<br>
8-byte chunks of the string.
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 29, 2015 at 07:58:09AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    If you have the time, it would be helpful. You might also configure
</span><br>
<span class="quotelev1">&gt;    -enable-debug.
</span><br>
<span class="quotelev1">&gt;    Meantime, I can take another gander to see how it could happen - looking
</span><br>
<span class="quotelev1">&gt;    at the code, it sure seems impossible, but maybe there is some strange
</span><br>
<span class="quotelev1">&gt;    path that would break it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Jul 29, 2015, at 6:29 AM, Schlottke-Lakemper, Michael
</span><br>
<span class="quotelev1">&gt;      &lt;m.schlottke-lakemper_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;      If it is helpful, I can try to compile OpenMPI with debug information
</span><br>
<span class="quotelev1">&gt;      and get more details on the reported error. However, it would be good if
</span><br>
<span class="quotelev1">&gt;      someone could tell me the necessary compile flags (on top of -O0 -g) and
</span><br>
<span class="quotelev1">&gt;      it would take me probably 1-2 weeks to do it. 
</span><br>
<span class="quotelev1">&gt;      Michael 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -------- Original message --------
</span><br>
<span class="quotelev1">&gt;      From: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      Date: 29/07/2015 14:17 (GMT+01:00)
</span><br>
<span class="quotelev1">&gt;      To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      Subject: Re: [OMPI users] Invalid read of size 4 (Valgrind error) with
</span><br>
<span class="quotelev1">&gt;      OpenMPI 1.8.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thomas,
</span><br>
<span class="quotelev1">&gt;      can you please elaborate ?
</span><br>
<span class="quotelev1">&gt;      I checked the code of opal_os_dirpath_create and could not find where
</span><br>
<span class="quotelev1">&gt;      such a thing can happen
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt;      Gilles
</span><br>
<span class="quotelev1">&gt;      On Wednesday, July 29, 2015, Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        On 07/28/15 17:34, Schlottke-Lakemper, Michael wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          That's what I suspected. Thank you for your confirmation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        you are mistaken, the allocation is 51 bytes long, i.e. valid bytes
</span><br>
<span class="quotelev1">&gt;        are at offsets 0 to 50. But since the read of 4 bytes starts at offset
</span><br>
<span class="quotelev1">&gt;        48, the bytes at offsets 48, 49, 50 and 51 get read, the last of which
</span><br>
<span class="quotelev1">&gt;        is illegal. It probably does no harm at the moment in practice,
</span><br>
<span class="quotelev1">&gt;        because virtually all allocators always add some padding to the next
</span><br>
<span class="quotelev1">&gt;        multiple of some power of 2. But still this means the program is
</span><br>
<span class="quotelev1">&gt;        incorrect in terms of any programming language definition involved
</span><br>
<span class="quotelev1">&gt;        (might be C, C++ or Fortran).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Regards, Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            On 25 Jul 2015, at 16:10 , Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt;            &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Looks to me like a false positive - we do malloc some space, and
</span><br>
<span class="quotelev1">&gt;            do access
</span><br>
<span class="quotelev1">&gt;            different parts of it. However, it looks like we are inside the
</span><br>
<span class="quotelev1">&gt;            space at all
</span><br>
<span class="quotelev1">&gt;            times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I'd suppress it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              On Jul 23, 2015, at 12:47 AM, Schlottke-Lakemper, Michael
</span><br>
<span class="quotelev1">&gt;              &lt;m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              recently we've been getting a Valgrind error in PMPI_Init for
</span><br>
<span class="quotelev1">&gt;              our suite of
</span><br>
<span class="quotelev1">&gt;              regression tests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              ==5922== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt;              ==5922==    at 0x61CC5C0: opal_os_dirpath_create (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev1">&gt;              /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev1">&gt;              /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt;              ==5922==  Address 0x710f670 is 48 bytes inside a block of size
</span><br>
<span class="quotelev1">&gt;              51 alloc'd
</span><br>
<span class="quotelev1">&gt;              ==5922==    at 0x4C29110: malloc (in
</span><br>
<span class="quotelev1">&gt;              /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x61CC572: opal_os_dirpath_create (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev1">&gt;              /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev1">&gt;              /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt;              ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev1">&gt;              /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev1">&gt;              ==5922==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              What is weird is that it seems to depend on the pbs/torque
</span><br>
<span class="quotelev1">&gt;              session we're in:
</span><br>
<span class="quotelev1">&gt;              sometimes the error does not occur and all and all tests run
</span><br>
<span class="quotelev1">&gt;              fine (this is in
</span><br>
<span class="quotelev1">&gt;              fact the only Valgrind error we're having at the moment). Other
</span><br>
<span class="quotelev1">&gt;              times every
</span><br>
<span class="quotelev1">&gt;              single test we're running has this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Has anyone seen this or might be able to offer an explanation?
</span><br>
<span class="quotelev1">&gt;              If it is a
</span><br>
<span class="quotelev1">&gt;              false-positive, I'd be happy to suppress it :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Thanks a lot in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              P.S.: This error is not covered/suppressed by the default ompi
</span><br>
<span class="quotelev1">&gt;              suppression
</span><br>
<span class="quotelev1">&gt;              file in $PREFIX/share/openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              --
</span><br>
<span class="quotelev1">&gt;              Michael Schlottke-Lakemper
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev1">&gt;              Ju:lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev1">&gt;              RWTH Aachen University
</span><br>
<span class="quotelev1">&gt;              Wu:llnerstrasse 5a
</span><br>
<span class="quotelev1">&gt;              52062 Aachen
</span><br>
<span class="quotelev1">&gt;              Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev1">&gt;              Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev1">&gt;              Mail: m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;              Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              _______________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;              users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;              Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;              Link to this post:
</span><br>
<span class="quotelev1">&gt;              <a href="http://www.open-mpi.org/community/lists/users/2015/07/27303.php">http://www.open-mpi.org/community/lists/users/2015/07/27303.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;            Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;            Link to this post:
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/community/lists/users/2015/07/27328.php">http://www.open-mpi.org/community/lists/users/2015/07/27328.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          users mailing list
</span><br>
<span class="quotelev1">&gt;          users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/users/2015/07/27348.php">http://www.open-mpi.org/community/lists/users/2015/07/27348.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        --
</span><br>
<span class="quotelev1">&gt;        Thomas Jahns
</span><br>
<span class="quotelev1">&gt;        HD(CP)^2
</span><br>
<span class="quotelev1">&gt;        Abteilung Anwendungssoftware
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Deutsches Klimarechenzentrum GmbH
</span><br>
<span class="quotelev1">&gt;        Bundesstrasse 45a  o  D-20146 Hamburg  o  Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Phone:  +49 40 460094-151
</span><br>
<span class="quotelev1">&gt;        Fax:    +49 40 460094-270
</span><br>
<span class="quotelev1">&gt;        Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        URL:    www.dkrz.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Gescha:ftsfu:hrer: Prof. Dr. Thomas Ludwig
</span><br>
<span class="quotelev1">&gt;        Sitz der Gesellschaft: Hamburg
</span><br>
<span class="quotelev1">&gt;        Amtsgericht Hamburg HRB 39784
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/07/27359.php">http://www.open-mpi.org/community/lists/users/2015/07/27359.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27360.php">http://www.open-mpi.org/community/lists/users/2015/07/27360.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27362/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27361.php">Shahzeb: "[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4"</a>
<li><strong>In reply to:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
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
