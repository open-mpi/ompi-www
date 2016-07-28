<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 18:44:17 2014" -->
<!-- isoreceived="20140516224417" -->
<!-- sent="Fri, 16 May 2014 18:44:16 -0400" -->
<!-- isosent="20140516224416" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="537694C0.3080106_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOiaXW0Zs3J4X19_HTvO3DqQz_L+m4CaY0sbCFzY9DRZZwEJ8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configuration error?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 18:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben
<br>
<p>I guess you are not particularly interested on Modules or LMod either.
<br>
You probably don't administer this cluster,
<br>
but are just trying to have MPI working, right?
<br>
<p><p>Are you trying to use Open MPI or MPICH?
<br>
Your email mentions both.
<br>
Let's assume it is Open MPI.
<br>
<p>Is recompiling your code with the new version of Open MPI installed
<br>
in the cluster an option for you, or not?
<br>
If it is, that may be the simplest and best solution.
<br>
<p>If the cluster has a system administrator, you may ask him about
<br>
the best way to set up your environment variables.
<br>
<p>In any case, for your Open MPI to work you need your PATH and 
<br>
LD_LIBRARY_PATH to be correctly set.
<br>
If the system administator migrated OpenMPI 1.4.4 to a &quot;retired&quot; 
<br>
directory, you may need to adjust PATH and LD_LIBRARY_PATH
<br>
to point to the &quot;retired&quot; directories (if they are still functional).
<br>
<p>echo $PATH
<br>
echo $LD_LIBRARY_PATH
<br>
<p>may show what you have.
<br>
<p>Does the cluster use modules, perhaps?
<br>
What do you get from
<br>
<p>module list
<br>
<p>?
<br>
<p>As a workaround you're using bash, you could add these to .bashrc
<br>
<p>export PATH=/opt/apps/openmpi/retired/1.4.4-intel/bin:$PATH
<br>
export 
<br>
LD_LIBRARY_PATH=/opt/apps/openmpi/retired/1.4.4-intel/lib:$LD_LIBRARY_PATH
<br>
<p>if csh to .cshrc
<br>
<p>setenv PATH /opt/apps/openmpi/retired/1.4.4-intel/bin:$PATH
<br>
setenv LD_LIBRARY_PATH 
<br>
/opt/apps/openmpi/retired/1.4.4-intel/lib:$LD_LIBRARY_PATH
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><p>On 05/16/2014 05:39 PM, Ben Lash wrote:
<br>
<span class="quotelev1">&gt; My cluster has just upgraded to a new version of MPI, and I'm using an
</span><br>
<span class="quotelev1">&gt; old one. It seems that I'm having trouble compiling due to the compiler
</span><br>
<span class="quotelev1">&gt; wrapper file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev1">&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev1">&gt;   /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev1">&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software I'm
</span><br>
<span class="quotelev1">&gt; trying to recompile's lib folder
</span><br>
<span class="quotelev1">&gt; (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I also
</span><br>
<span class="quotelev1">&gt; tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Ben L
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
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
