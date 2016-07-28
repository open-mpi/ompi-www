<?
$subject_val = "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8, (Sparc)?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 06:36:48 2010" -->
<!-- isoreceived="20100209113648" -->
<!-- sent="Tue, 09 Feb 2010 06:36:10 -0500" -->
<!-- isosent="20100209113610" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8, (Sparc)?" -->
<!-- id="4B7148AA.7080605_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1265475612.6058.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8, (Sparc)?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 06:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>Previous message:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 05 Feb 2010 16:16:29 -0800 From: &quot;David Mathog&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;mathog_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We haven't tried Solaris 8 in quite some time.  However, for your first 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; issue did you include the --enable-heterogeneous option on your 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure command?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Since you are mix IA-32 and SPARC nodes you'll want to include this so 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the endian issue doesn't bite you.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added that on the configure, rebuilt, installed, and now the examples work. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Glad to hear that.
<br>
<span class="quotelev1">&gt; Any thoughts on the Forte compiler issue?  This is not quite as pressing
</span><br>
<span class="quotelev1">&gt; now that the gcc version works, and most of the computation will be on
</span><br>
<span class="quotelev1">&gt; the remote nodes anyway.  Still, the Forte compilers should generate
</span><br>
<span class="quotelev1">&gt; faster code than gcc, and I would prefer to use them if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Are you using the vampir tracing feature?  If not I would add the 
<br>
&quot;--enable-contrib-no-build=vt&quot; option to your configure line and see if 
<br>
that works.
<br>
<p>Beware, I don't think we've tried compiling OMPI with Forte 7.  Also 
<br>
note omp.h is for OpenMP not MPI.   It looks like the last error you ran 
<br>
into with vt_unify.cc may be an issue with the Forte 7 C++ compiler. 
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>Previous message:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
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
