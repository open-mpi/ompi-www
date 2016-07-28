<?
$subject_val = "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 17:40:39 2015" -->
<!-- isoreceived="20150730214039" -->
<!-- sent="Thu, 30 Jul 2015 21:40:36 +0000" -->
<!-- isosent="20150730214036" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7" -->
<!-- id="3E9A1EFE-EAB6-4BA7-93BE-8666F31F5340_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150730201048.GC56782_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 17:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2015, at 4:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Ralph. Please run again with --enable-debug. That will give
</span><br>
<span class="quotelev1">&gt; more information (line number) on where the error is occuring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the function in question the only place I see that could be
</span><br>
<span class="quotelev1">&gt; causing this warning is the call to strlen. Some implementations of
</span><br>
<span class="quotelev1">&gt; strlen use operate on larger chunks (4 or 8 bytes). This will make
</span><br>
<span class="quotelev1">&gt; valgrind unhappy but does not make the implementation invalid as no read
</span><br>
<span class="quotelev1">&gt; will cross a page boundary (so no SEGV). One example of such a strlen
</span><br>
<span class="quotelev1">&gt; implementation is the one used by icc which uses vector operations on
</span><br>
<span class="quotelev1">&gt; 8-byte chunks of the string.
</span><br>
<p>If this is what is happening, we can put a memchecker macro in here to lie to valgrind and say that the memory is defined (with a good comment explaining why).  This would avoid us from having this conversation again at some point in the future.  :-)
<br>
<p><span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 29, 2015 at 07:58:09AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   If you have the time, it would be helpful. You might also configure
</span><br>
<span class="quotelev2">&gt;&gt;   -enable-debug.
</span><br>
<span class="quotelev2">&gt;&gt;   Meantime, I can take another gander to see how it could happen - looking
</span><br>
<span class="quotelev2">&gt;&gt;   at the code, it sure seems impossible, but maybe there is some strange
</span><br>
<span class="quotelev2">&gt;&gt;   path that would break it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Jul 29, 2015, at 6:29 AM, Schlottke-Lakemper, Michael
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;m.schlottke-lakemper_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     If it is helpful, I can try to compile OpenMPI with debug information
</span><br>
<span class="quotelev2">&gt;&gt;     and get more details on the reported error. However, it would be good if
</span><br>
<span class="quotelev2">&gt;&gt;     someone could tell me the necessary compile flags (on top of -O0 -g) and
</span><br>
<span class="quotelev2">&gt;&gt;     it would take me probably 1-2 weeks to do it. 
</span><br>
<span class="quotelev2">&gt;&gt;     Michael 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     -------- Original message --------
</span><br>
<span class="quotelev2">&gt;&gt;     From: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Date: 29/07/2015 14:17 (GMT+01:00)
</span><br>
<span class="quotelev2">&gt;&gt;     To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subject: Re: [OMPI users] Invalid read of size 4 (Valgrind error) with
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI 1.8.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;     can you please elaborate ?
</span><br>
<span class="quotelev2">&gt;&gt;     I checked the code of opal_os_dirpath_create and could not find where
</span><br>
<span class="quotelev2">&gt;&gt;     such a thing can happen
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;     On Wednesday, July 29, 2015, Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       On 07/28/15 17:34, Schlottke-Lakemper, Michael wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         That's what I suspected. Thank you for your confirmation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       you are mistaken, the allocation is 51 bytes long, i.e. valid bytes
</span><br>
<span class="quotelev2">&gt;&gt;       are at offsets 0 to 50. But since the read of 4 bytes starts at offset
</span><br>
<span class="quotelev2">&gt;&gt;       48, the bytes at offsets 48, 49, 50 and 51 get read, the last of which
</span><br>
<span class="quotelev2">&gt;&gt;       is illegal. It probably does no harm at the moment in practice,
</span><br>
<span class="quotelev2">&gt;&gt;       because virtually all allocators always add some padding to the next
</span><br>
<span class="quotelev2">&gt;&gt;       multiple of some power of 2. But still this means the program is
</span><br>
<span class="quotelev2">&gt;&gt;       incorrect in terms of any programming language definition involved
</span><br>
<span class="quotelev2">&gt;&gt;       (might be C, C++ or Fortran).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Regards, Thomas
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;           On 25 Jul 2015, at 16:10 , Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;           &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;           Looks to me like a false positive - we do malloc some space, and
</span><br>
<span class="quotelev2">&gt;&gt;           do access
</span><br>
<span class="quotelev2">&gt;&gt;           different parts of it. However, it looks like we are inside the
</span><br>
<span class="quotelev2">&gt;&gt;           space at all
</span><br>
<span class="quotelev2">&gt;&gt;           times.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;           I'd suppress it
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             On Jul 23, 2015, at 12:47 AM, Schlottke-Lakemper, Michael
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             recently we've been getting a Valgrind error in PMPI_Init for
</span><br>
<span class="quotelev2">&gt;&gt;             our suite of
</span><br>
<span class="quotelev2">&gt;&gt;             regression tests:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922== Invalid read of size 4
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    at 0x61CC5C0: opal_os_dirpath_create (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==  Address 0x710f670 is 48 bytes inside a block of size
</span><br>
<span class="quotelev2">&gt;&gt;             51 alloc'd
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    at 0x4C29110: malloc (in
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x61CC572: opal_os_dirpath_create (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-pal.so.6.2.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F207E5: orte_session_dir (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F34F04: orte_ess_base_app_setup (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x7E96679: rte_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/openmpi/mca_ess_env.so)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x5F12A77: orte_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libopen-rte.so.7.0.6)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x509883C: ompi_mpi_init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x50B843A: PMPI_Init (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/opt/openmpi-1.8.7/lib64/libmpi.so.1.6.2)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0xEBA79C: ZFS::run() (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==    by 0x4DC243: main (in
</span><br>
<span class="quotelev2">&gt;&gt;             /aia/r018/scratch/mic/.zfstester/.zacc_cron/zacc_cron_r9063/zfs_gnu_production)
</span><br>
<span class="quotelev2">&gt;&gt;             ==5922==
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             What is weird is that it seems to depend on the pbs/torque
</span><br>
<span class="quotelev2">&gt;&gt;             session we're in:
</span><br>
<span class="quotelev2">&gt;&gt;             sometimes the error does not occur and all and all tests run
</span><br>
<span class="quotelev2">&gt;&gt;             fine (this is in
</span><br>
<span class="quotelev2">&gt;&gt;             fact the only Valgrind error we're having at the moment). Other
</span><br>
<span class="quotelev2">&gt;&gt;             times every
</span><br>
<span class="quotelev2">&gt;&gt;             single test we're running has this error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             Has anyone seen this or might be able to offer an explanation?
</span><br>
<span class="quotelev2">&gt;&gt;             If it is a
</span><br>
<span class="quotelev2">&gt;&gt;             false-positive, I'd be happy to suppress it :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks a lot in advance
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             Michael
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             P.S.: This error is not covered/suppressed by the default ompi
</span><br>
<span class="quotelev2">&gt;&gt;             suppression
</span><br>
<span class="quotelev2">&gt;&gt;             file in $PREFIX/share/openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             --
</span><br>
<span class="quotelev2">&gt;&gt;             Michael Schlottke-Lakemper
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev2">&gt;&gt;             Ju:lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev2">&gt;&gt;             RWTH Aachen University
</span><br>
<span class="quotelev2">&gt;&gt;             Wu:llnerstrasse 5a
</span><br>
<span class="quotelev2">&gt;&gt;             52062 Aachen
</span><br>
<span class="quotelev2">&gt;&gt;             Germany
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev2">&gt;&gt;             Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev2">&gt;&gt;             Mail: m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/07/27303.php">http://www.open-mpi.org/community/lists/users/2015/07/27303.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;           _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;           users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;           users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;           Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;           <a href="http://www.open-mpi.org/community/lists/users/2015/07/27328.php">http://www.open-mpi.org/community/lists/users/2015/07/27328.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/07/27348.php">http://www.open-mpi.org/community/lists/users/2015/07/27348.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       --
</span><br>
<span class="quotelev2">&gt;&gt;       Thomas Jahns
</span><br>
<span class="quotelev2">&gt;&gt;       HD(CP)^2
</span><br>
<span class="quotelev2">&gt;&gt;       Abteilung Anwendungssoftware
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Deutsches Klimarechenzentrum GmbH
</span><br>
<span class="quotelev2">&gt;&gt;       Bundesstrasse 45a  o  D-20146 Hamburg  o  Germany
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Phone:  +49 40 460094-151
</span><br>
<span class="quotelev2">&gt;&gt;       Fax:    +49 40 460094-270
</span><br>
<span class="quotelev2">&gt;&gt;       Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       URL:    www.dkrz.de
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Gescha:ftsfu:hrer: Prof. Dr. Thomas Ludwig
</span><br>
<span class="quotelev2">&gt;&gt;       Sitz der Gesellschaft: Hamburg
</span><br>
<span class="quotelev2">&gt;&gt;       Amtsgericht Hamburg HRB 39784
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/07/27359.php">http://www.open-mpi.org/community/lists/users/2015/07/27359.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27360.php">http://www.open-mpi.org/community/lists/users/2015/07/27360.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27362.php">http://www.open-mpi.org/community/lists/users/2015/07/27362.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
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
