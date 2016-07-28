<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 17:51:53 2013" -->
<!-- isoreceived="20130426215153" -->
<!-- sent="Fri, 26 Apr 2013 14:51:47 -0700" -->
<!-- isosent="20130426215147" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="517AF6F3.7030903_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C2B3F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 17:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>To take care of the ierr-&gt;ierror conversion, simply do the following:
<br>
<p>&nbsp;&nbsp;&nbsp;cd openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts
<br>
&nbsp;&nbsp;&nbsp;ls -1 *.sh | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
<br>
<p>Then go up a level to openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tk and use:
<br>
<p>&nbsp;&nbsp;&nbsp;cd ..
<br>
&nbsp;&nbsp;&nbsp;ls -1 fort*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
<br>
<p>Last, the use-mpi-ignore-tkr directory:
<br>
<p>&nbsp;&nbsp;&nbsp;cd ../use-mpi-ignore-tkr
<br>
&nbsp;&nbsp;&nbsp;ls -1 mpi*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
<br>
<p>As you can tell from the below, I needed to use a few MPI_Type calls. 
<br>
So fixed the few that I needed in the 
<br>
openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory.  I didn't 
<br>
exhaustively go through and verify every interface in the whole MPI library.
<br>
<p>Walter
<br>
<p>On 04/26/2013 11:53 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Apr 25, 2013, at 10:52 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; I went into the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory and modified the files to use ierror instead of ierr.  (One well-crafted line of shell script.)  Did the same with a couple of .h.in files in the use-mpi-tkr and use-mpi-ignore-tkr directories, and use-mpi-tkr/attr_fn-f90-interfaces.h.in.  (One editor command each.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the above, the mpi module is in much better shape.  However there are still some scattered incorrect non-ierror argument names.  A few examples from the code I am working with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_create_struct: The 2nd argument should be &quot;array_of_blocklengths&quot;, instead of &quot;array_of_block_lengths&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_commit: &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free: Again, &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are more...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cool.  Any chance you could send us a patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
