<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 20:37:00 2014" -->
<!-- isoreceived="20140516003700" -->
<!-- sent="Thu, 15 May 2014 17:35:12 -0700" -->
<!-- isosent="20140516003512" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="F255B1D0-A5AA-4595-966F-1D5F2F8637DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53755549.2080803_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 20:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you might try the nightly 1.8.2 build - there were some additional patches to fix the darned tkr support. I'm afraid getting all the various compilers to work correctly with it has been a major pain.
<br>
<p><p>On May 15, 2014, at 5:01 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff and the list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A year ago, we had the discussion appended below.  I just downloaded v1.8.1 and the F90 module is still very broken.  And once again I am having to modify my local version.  (+1 for open source!)  Will it be fixed in v1.8.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure is using the &quot;use-mpi-tkr&quot; version on my system.  I can see that the &quot;use-mpi-f08&quot; version is much better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/26/2013 03:14 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I committed that part; thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2013, at 5:51 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To take care of the ierr-&gt;ierror conversion, simply do the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cd openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ls -1 *.sh | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then go up a level to openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tk and use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cd ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ls -1 fort*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last, the use-mpi-ignore-tkr directory:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cd ../use-mpi-ignore-tkr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ls -1 mpi*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can tell from the below, I needed to use a few MPI_Type calls. So fixed the few that I needed in the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory.  I didn't exhaustively go through and verify every interface in the whole MPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Walter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/26/2013 11:53 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 25, 2013, at 10:52 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I went into the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory and modified the files to use ierror instead of ierr.  (One well-crafted line of shell script.)  Did the same with a couple of .h.in files in the use-mpi-tkr and use-mpi-ignore-tkr directories, and use-mpi-tkr/attr_fn-f90-interfaces.h.in.  (One editor command each.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With the above, the mpi module is in much better shape.  However there are still some scattered incorrect non-ierror argument names.  A few examples from the code I am working with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Type_create_struct: The 2nd argument should be &quot;array_of_blocklengths&quot;, instead of &quot;array_of_block_lengths&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Type_commit: &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Type_free: Again, &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are more...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cool.  Any chance you could send us a patch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="24412.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24410.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
