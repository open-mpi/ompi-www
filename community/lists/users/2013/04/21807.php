<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 18:14:54 2013" -->
<!-- isoreceived="20130426221454" -->
<!-- sent="Fri, 26 Apr 2013 22:14:49 +0000" -->
<!-- isosent="20130426221449" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C3DB7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="517AF6F3.7030903_at_earthlink.net" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 18:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I committed that part; thanks.
<br>
<p>On Apr 26, 2013, at 5:51 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To take care of the ierr-&gt;ierror conversion, simply do the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cd openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts
</span><br>
<span class="quotelev1">&gt;  ls -1 *.sh | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then go up a level to openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tk and use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cd ..
</span><br>
<span class="quotelev1">&gt;  ls -1 fort*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Last, the use-mpi-ignore-tkr directory:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cd ../use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt;  ls -1 mpi*.in | xargs -i -t ex -c &quot;:1,\$s?ierr?ierror?&quot; -c &quot;:wq&quot; {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can tell from the below, I needed to use a few MPI_Type calls. So fixed the few that I needed in the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory.  I didn't exhaustively go through and verify every interface in the whole MPI library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/26/2013 11:53 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2013, at 10:52 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I went into the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory and modified the files to use ierror instead of ierr.  (One well-crafted line of shell script.)  Did the same with a couple of .h.in files in the use-mpi-tkr and use-mpi-ignore-tkr directories, and use-mpi-tkr/attr_fn-f90-interfaces.h.in.  (One editor command each.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the above, the mpi module is in much better shape.  However there are still some scattered incorrect non-ierror argument names.  A few examples from the code I am working with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Type_create_struct: The 2nd argument should be &quot;array_of_blocklengths&quot;, instead of &quot;array_of_block_lengths&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Type_commit: &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Type_free: Again, &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are more...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cool.  Any chance you could send us a patch?
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
<li><strong>Next message:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24408.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
