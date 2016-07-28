<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  4 22:47:04 2013" -->
<!-- isoreceived="20131105034704" -->
<!-- sent="Tue, 5 Nov 2013 03:47:02 +0000" -->
<!-- isosent="20131105034702" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="E66D01E1-D971-4D45-AF8D-A404E76172BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9855850-CEA0-4D6C-AAE6-BD8ECA1E386D_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-04 22:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
<li><strong>Previous message:</strong> <a href="22904.php">Andrus, Brian Contractor: "[OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph raised this internally and we fixed it -- we had an error in a Makefile.am that was accidentally installing the libevent header files when we didn't mean them to be.
<br>
<p>If you can apply this patch to your Homebrew recipe, it should fix the issue (it'll be included in 1.7.4):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/29588">https://svn.open-mpi.org/trac/ompi/changeset/29588</a>
<br>
<p>Thanks for bringing the issue to our attention!
<br>
<p><p>On Nov 3, 2013, at 7:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll check into it - that shouldn't be happening and is probably an error in our configure logic somewhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2013, at 7:15 AM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick reply. That doesn't seem to be it though. Homebrew only uses the configure flags
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	--prefix=... \
</span><br>
<span class="quotelev2">&gt;&gt; 	--disable-dependency-tracking \
</span><br>
<span class="quotelev2">&gt;&gt; 	--disable-silent-rules \
</span><br>
<span class="quotelev2">&gt;&gt; 	--enable-ipv6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If requested, it will also add
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	--enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just tried compiling Open-MPI 1.7.3 by hand using
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/tmp/ompi_install --disable-dependency-tracking --disable-silent-rules --enable-ipv6 --enable-mpi-thread-multiple --without-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the 'event2' headers are still under /tmp/ompi_install/include. As far as I can tell, the conflict is still there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3 November, 2013 at 9:44:46 AM, Ralph Castain (rhc_at_[hidden]) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm unfamiliar with Homebrew, but it sounds like they created  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OMPI package --with-devel-headers for some reason. That  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't make a lot of sense for a distribution as it is only used  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by OMPI developers who want access to OMPI internal functions  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from inside a test suite.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We unfortunately have no control over how 3rd party packagers  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide to build OMPI, which is why we generally advise building  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it from source instead. In this case, nothing changed between  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6 and 1.7 - except that the packager decided to build it with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a different configure option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We include libevent in a completely &quot;hidden&quot; manner for one simple  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason - OMPI uses functions in libevent that are not present  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in older versions of libevent that are typically the ones provided  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by quite a few packagers (e.g., CentOS and Mac). Users of those  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems would find them unable to execute OMPI if we didn't, or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we'd have bizarre levels of code protection/branches throughout  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI to resolve all the use-cases for the wide range of libevent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions out there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd suggest you &quot;uninstall&quot; the Homebrew package, and simply  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; download/build OMPI from the source code tarball. The problem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will then disappear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2013, at 6:03 AM, Dominique Orban  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm a humble indirect user of Open-MPI. On OSX, my Open-MPI installation  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is supplied by the Homebrew package manager [1]. Another package  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supplied by Homebrew is libevent.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recently read on the dev list [2] a discussion about libevent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having always been part of Open-MPI but being more apparent in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.7.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least on OSX, this causes unfortunate header file conflicts.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If a user were to install both libevent and Open-MPI by hand to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local (which is essentially what Homebrew does), one of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the two would obliterate the 'event2' header files of the other.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I can tell, the 'event2' header files in Open-MPI differ  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from those in libevent 2.0.21 (the version currently distributed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in Homebrew). This kind of conflict was absent from Open-MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Homebrew supplies Open-MPI 1.7.3 by default because the compilers  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shipped with the latest OSX development environment (Xcode  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.0) fail to build Open-MPI 1.6.5 correctly (I do not use those  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers myself, but I am told `make check` fails) [3].
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In view of the header file conflict, I'm wondering if there is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a strong argument for not keeping the libevent-related header  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files of Open-MPI private. Stashing libevent-related stuff  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a private location could probably be done more easily than  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding logic to build Open-MPI against an external libevent.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's unfortunate for Open-MPI to conflict in this way with seemingly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unrelated software packages that rely on libevent (e.g., tmux).  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dominique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1] <a href="http://brew.sh">http://brew.sh</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [2] <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12273.php">http://www.open-mpi.org/community/lists/devel/2013/04/12273.php</a>  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [3] <a href="https://github.com/mxcl/homebrew/issues/23642">https://github.com/mxcl/homebrew/issues/23642</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dominique
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
<li><strong>Next message:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
<li><strong>Previous message:</strong> <a href="22904.php">Andrus, Brian Contractor: "[OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
