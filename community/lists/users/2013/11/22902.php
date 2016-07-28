<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  3 10:16:01 2013" -->
<!-- isoreceived="20131103151601" -->
<!-- sent="Sun, 3 Nov 2013 10:15:35 -0500" -->
<!-- isosent="20131103151535" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="etPan.527668d3.1551f313.c7be_at_Aragorn" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E22400D3-0801-4C8A-850E-7362BD10DD31_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent<br>
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-03 10:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick reply. That doesn't seem to be it though. Homebrew only uses the configure flags
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=... \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-dependency-tracking \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-silent-rules \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-ipv6
<br>
<p>If requested, it will also add
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple
<br>
<p>I just tried compiling Open-MPI 1.7.3 by hand using
<br>
<p>./configure --prefix=/tmp/ompi_install --disable-dependency-tracking --disable-silent-rules --enable-ipv6 --enable-mpi-thread-multiple --without-devel-headers
<br>
<p>and the 'event2' headers are still under /tmp/ompi_install/include. As far as I can tell, the conflict is still there.
<br>
<p><p>On 3 November, 2013 at 9:44:46 AM, Ralph Castain (rhc_at_[hidden]) wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm unfamiliar with Homebrew, but it sounds like they created  
</span><br>
<span class="quotelev1">&gt; the OMPI package --with-devel-headers for some reason. That  
</span><br>
<span class="quotelev1">&gt; doesn't make a lot of sense for a distribution as it is only used  
</span><br>
<span class="quotelev1">&gt; by OMPI developers who want access to OMPI internal functions  
</span><br>
<span class="quotelev1">&gt; from inside a test suite.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We unfortunately have no control over how 3rd party packagers  
</span><br>
<span class="quotelev1">&gt; decide to build OMPI, which is why we generally advise building  
</span><br>
<span class="quotelev1">&gt; it from source instead. In this case, nothing changed between  
</span><br>
<span class="quotelev1">&gt; 1.6 and 1.7 - except that the packager decided to build it with  
</span><br>
<span class="quotelev1">&gt; a different configure option.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We include libevent in a completely &quot;hidden&quot; manner for one simple  
</span><br>
<span class="quotelev1">&gt; reason - OMPI uses functions in libevent that are not present  
</span><br>
<span class="quotelev1">&gt; in older versions of libevent that are typically the ones provided  
</span><br>
<span class="quotelev1">&gt; by quite a few packagers (e.g., CentOS and Mac). Users of those  
</span><br>
<span class="quotelev1">&gt; systems would find them unable to execute OMPI if we didn't, or  
</span><br>
<span class="quotelev1">&gt; we'd have bizarre levels of code protection/branches throughout  
</span><br>
<span class="quotelev1">&gt; OMPI to resolve all the use-cases for the wide range of libevent  
</span><br>
<span class="quotelev1">&gt; versions out there.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'd suggest you &quot;uninstall&quot; the Homebrew package, and simply  
</span><br>
<span class="quotelev1">&gt; download/build OMPI from the source code tarball. The problem  
</span><br>
<span class="quotelev1">&gt; will then disappear.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2013, at 6:03 AM, Dominique Orban  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Dear list,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm a humble indirect user of Open-MPI. On OSX, my Open-MPI installation  
</span><br>
<span class="quotelev1">&gt; is supplied by the Homebrew package manager [1]. Another package  
</span><br>
<span class="quotelev1">&gt; supplied by Homebrew is libevent.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently read on the dev list [2] a discussion about libevent  
</span><br>
<span class="quotelev1">&gt; having always been part of Open-MPI but being more apparent in  
</span><br>
<span class="quotelev1">&gt; 1.7.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At least on OSX, this causes unfortunate header file conflicts.  
</span><br>
<span class="quotelev1">&gt; If a user were to install both libevent and Open-MPI by hand to  
</span><br>
<span class="quotelev1">&gt; /usr/local (which is essentially what Homebrew does), one of  
</span><br>
<span class="quotelev1">&gt; the two would obliterate the 'event2' header files of the other.  
</span><br>
<span class="quotelev1">&gt; As far as I can tell, the 'event2' header files in Open-MPI differ  
</span><br>
<span class="quotelev1">&gt; from those in libevent 2.0.21 (the version currently distributed  
</span><br>
<span class="quotelev1">&gt; in Homebrew). This kind of conflict was absent from Open-MPI  
</span><br>
<span class="quotelev1">&gt; 1.6.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Homebrew supplies Open-MPI 1.7.3 by default because the compilers  
</span><br>
<span class="quotelev1">&gt; shipped with the latest OSX development environment (Xcode  
</span><br>
<span class="quotelev1">&gt; 5.0) fail to build Open-MPI 1.6.5 correctly (I do not use those  
</span><br>
<span class="quotelev1">&gt; compilers myself, but I am told `make check` fails) [3].
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In view of the header file conflict, I'm wondering if there is  
</span><br>
<span class="quotelev1">&gt; a strong argument for not keeping the libevent-related header  
</span><br>
<span class="quotelev1">&gt; files of Open-MPI private. Stashing libevent-related stuff  
</span><br>
<span class="quotelev1">&gt; to a private location could probably be done more easily than  
</span><br>
<span class="quotelev1">&gt; adding logic to build Open-MPI against an external libevent.  
</span><br>
<span class="quotelev1">&gt; It's unfortunate for Open-MPI to conflict in this way with seemingly  
</span><br>
<span class="quotelev1">&gt; unrelated software packages that rely on libevent (e.g., tmux).  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dominique
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://brew.sh">http://brew.sh</a>
</span><br>
<span class="quotelev2">&gt; &gt; [2] <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12273.php">http://www.open-mpi.org/community/lists/devel/2013/04/12273.php</a>  
</span><br>
<span class="quotelev2">&gt; &gt; [3] <a href="https://github.com/mxcl/homebrew/issues/23642">https://github.com/mxcl/homebrew/issues/23642</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
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
<span class="quotelev1">&gt;  
</span><br>
<p>--&#194;&#160;
<br>
Dominique
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
