<?
$subject_val = "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 19:04:48 2012" -->
<!-- isoreceived="20120131000448" -->
<!-- sent="Mon, 30 Jan 2012 19:04:39 -0500" -->
<!-- isosent="20120131000439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile" -->
<!-- id="DB4C06AC-C9FA-4FED-8EFC-E4CBD2210014_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6D428561-EB16-48EB-ABEF-91786E6AE74E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 19:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18323.php">Reuti: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18323.php">Reuti: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you need these flags when you run pgf90 or mpif90?
<br>
<p>If you need it with mpif90, then using --with-wrapper-ldflags=&lt;foo&gt; should add &lt;foo&gt; to mpif90 every time you link something.  If you need something added to mpif90 every time you compile or line, then use --with-wrapper-fcflags=&lt;foo&gt;.
<br>
<p>If neither of those work, then it's a bug and please send us the info listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>FWIW, all that --with-wrapper-*flags=&lt;foo&gt; does is influence the contents of $prefix/share/openmpi/&lt;name&gt;-wrapper-data.txt file, where &lt;name&gt; is mpif90, mpicc, ...etc.
<br>
<p>You can edit those files directly; the --with-wrapper-*flags options are meant to be an easier way to access what goes in there.
<br>
<p><p><p>On Jan 30, 2012, at 6:41 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 31.01.2012 um 00:24 schrieb Cable, Sam B Civ USAF AFMC AFRL/RVBXI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need to build OpenMPI with Portland Group Fortran.  I need to add a flag to the pgf90 linker command that is run when mpif90 is invoked.  I have tried configuring with LDFLAGS and &#150;with-wrapper-ldflags, but nothing works.  I am thinking that surely there is a way to get non-default flags put into the pgf90 command, but I am out of options, as far as I can tell.  Anyone know how to do this?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you need it all the time? There is a preferences file which will always be applied called ~/.mypgirc, I suggest to ask in the pgroup forum for the detailed syntax for your case (I think it's still undocumented and only mentioned in the user's guide briefly on page 14/15). In my case the syntax they suggested was: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set POSTOPTIONS=$ifn(-tp,-tp=k8-64);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to always compile for a common AMD64 platform, independent where the compiler runs on and w/o command line options; maybe you can adjust it for your case along the brief description in the user's guide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18323.php">Reuti: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18323.php">Reuti: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<!-- nextthread="start" -->
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
