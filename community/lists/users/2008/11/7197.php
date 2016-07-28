<?
$subject_val = "Re: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 16:33:02 2008" -->
<!-- isoreceived="20081103213302" -->
<!-- sent="Mon, 3 Nov 2008 16:32:55 -0500" -->
<!-- isosent="20081103213255" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] switch from mpich2 to openMPI &amp;lt;newbie question&amp;gt;" -->
<!-- id="D6686D77-8576-46A7-815E-721A6D645796_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490F664F.4000000_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 16:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7196.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2008, at 3:59 PM, PattiMichelle wrote:
<br>
<p><span class="quotelev1">&gt; I just found out I need to switch from mpich2 to openMPI for some  
</span><br>
<span class="quotelev1">&gt; code I'm running.  I noticed that it's available in an openSuSE repo  
</span><br>
<span class="quotelev1">&gt; (I'm using openSuSE 11.0 x86_64 on a TYAN 32-processor Opteron 8000  
</span><br>
<span class="quotelev1">&gt; system), but when I was using mpich2 I seemed to have better luck  
</span><br>
<span class="quotelev1">&gt; compiling it from code.  This is the line I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # $ F77=/path/to/g95 F90=/path/to/g95 ./configure --prefix=/some/ 
</span><br>
<span class="quotelev1">&gt; place/mpich2-install
</span><br>
<p>Use FC=/path/to/g95 instead of F90.  Better yet, but the F77 and FC  
<br>
after the ./configure:
<br>
<p>$ ./configure --prefix=/wherever FC=/path/to/g95 F77=/path/to/g95
<br>
<p><span class="quotelev1">&gt; But usually I left the &quot;--prefix=&quot; off and just let it install to  
</span><br>
<span class="quotelev1">&gt; it's default...  which is /usr/local/bin and that's nice because  
</span><br>
<span class="quotelev1">&gt; it's already in the PATH and very usable.
</span><br>
<p>That would be fine as well.  But ensure that you install MPICH[2] and  
<br>
Open MPI in two different prefixes -- we have a few executables and  
<br>
libraries that are the same name, so if you install them into the same  
<br>
location, they'll overwrite each other.
<br>
<p><span class="quotelev1">&gt; I guess my question is whether or not the defaults and configuration  
</span><br>
<span class="quotelev1">&gt; syntax have stayed the same in openMPI.  I also could use a  
</span><br>
<span class="quotelev1">&gt; &quot;quickstart&quot; guide for a non-programming user (e.g., I think I have  
</span><br>
<span class="quotelev1">&gt; to start a daemon before running parallelized programs).
</span><br>
<p>Our mpirun/mpiexec is a little different than MPICH[2]'s -- you might  
<br>
want to check out them man page.  OMPI doesn't use user-started  
<br>
daemons for most cases; you should just be able to &quot;mpirun ...&quot; right  
<br>
out of the box.  If you're not using a resource manager, you'll likely  
<br>
need to supply a hostfile, but OMPI's mpirun should support the same  
<br>
syntax as MPICH[2]'s hostfiles.
<br>
<p>Your MPI apps should compile with Open MPI if you use our wrapper  
<br>
compilers (mpicc, mpif90, etc.).  Most well-written MPI apps will run  
<br>
properly with multiple MPI implementations, but it's certainly  
<br>
possible that you'll run into a few snags if you inadvertently coded  
<br>
your app to some particular characteristics of MPICH[2].  The best way  
<br>
to know is just to try running it and see what happens.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7198.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7196.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
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
