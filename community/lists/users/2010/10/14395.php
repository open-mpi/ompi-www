<?
$subject_val = "Re: [OMPI users] location of ompi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 17:30:01 2010" -->
<!-- isoreceived="20101005213001" -->
<!-- sent="Tue, 05 Oct 2010 14:29:56 -0700" -->
<!-- isosent="20101005212956" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] location of ompi libraries" -->
<!-- id="4CAB98D4.9000708_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D4A91A1-107E-4FFD-BDFD-ADFD92491C4E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] location of ompi libraries<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 17:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for the response.  Reviewing my builds, I realized that for
<br>
1.4.2, I had configured using
<br>
<p>contrib/platform/lanl/tlcc/optimized-nopanasas
<br>
<p>per Ralph Castain's suggestion.  That file includes both:
<br>
<p>enable_dlopen=no
<br>
enable_shared=yes
<br>
enable_static=yes
<br>
<p>Here is my *real* issue.  I am trying to test Voltaire's Fabric
<br>
Collective Accelerator, which extends mca_component_path, and
<br>
adds a few additional .so files.  It appears I must have
<br>
enable_dlopen=yes for this to work, which makes sense.
<br>
<p>I assume that the shared/static settings above result in
<br>
*both* .a and .so versions of the ompi libraries getting
<br>
built.  I'm not sure if this will affect my ability to
<br>
use Voltaire's mca plugins, but I have determined that
<br>
simply removing the enable_dlopen=no is not sufficient
<br>
to restore all the ompi .so files.  I assume (haven't
<br>
tried it yet) that removing the enable_static=yes will
<br>
result in the ompi .so files getting created.
<br>
<p>I guess I'm just looking for some guidance in the use
<br>
of the above options.  I have read many warnings on
<br>
the ompi website about trying to link statically.
<br>
<p>Thanks!
<br>
<p>On 10/5/10 7:17 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It is more than likely that you compiled Open MPI with --enable-static and/or --disable-dlopen.  In this case, all of Open MPI's plugins are slurped up into the libraries themselves (e.g., libmpi.so or libmpi.a).  That's why everything continues to work properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2010, at 6:58 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In Open MPI 1.4.1, the directory lib/openmpi contains about 130
</span><br>
<span class="quotelev2">&gt;&gt; entries, including such things as mca_btl_openib.so.  In my
</span><br>
<span class="quotelev2">&gt;&gt; build of Open MPI 1.4.2, lib/openmpi contains exactly three
</span><br>
<span class="quotelev2">&gt;&gt; items:
</span><br>
<span class="quotelev2">&gt;&gt; libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have searched my 1.4.2 installation for mca_btl_openib.so,
</span><br>
<span class="quotelev2">&gt;&gt; to no avail.  And yet, 1.4.2 seems to work &quot;fine&quot;.  Is my
</span><br>
<span class="quotelev2">&gt;&gt; installation broken, or is the organization significantly
</span><br>
<span class="quotelev2">&gt;&gt; different between the two versions?  A quick scan of the
</span><br>
<span class="quotelev2">&gt;&gt; release notes didn't help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Turner
</span><br>
<span class="quotelev2">&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<p><p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
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
