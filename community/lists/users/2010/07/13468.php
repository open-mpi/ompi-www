<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  3 15:20:57 2010" -->
<!-- isoreceived="20100703192057" -->
<!-- sent="Sat, 3 Jul 2010 21:20:41 +0200" -->
<!-- isosent="20100703192041" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="A923DE56-6349-4017-B49C-22666613544F_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTinuqRJVTiJDwJe8leekRWukD9T5cfRpr42icxk5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-03 15:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.07.2010 um 04:20 schrieb Lisandro Dalcin:
<br>
<p><span class="quotelev1">&gt; On 28 June 2010 04:26, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw makefiles, where the compilers (i.e. MPI wrappers) were only  
</span><br>
<span class="quotelev2">&gt;&gt; used for
</span><br>
<span class="quotelev2">&gt;&gt; compiling the source to object files. Later on these were still  
</span><br>
<span class="quotelev2">&gt;&gt; linked with
</span><br>
<span class="quotelev2">&gt;&gt; `gcc` or `ld`. Hence the MPI library must be accessed also for the  
</span><br>
<span class="quotelev2">&gt;&gt; linker
</span><br>
<span class="quotelev2">&gt;&gt; step by `mpicc` instead of `gcc` when setting $LD is supported, or  
</span><br>
<span class="quotelev2">&gt;&gt; set in
</span><br>
<span class="quotelev2">&gt;&gt; e.g. $LDFLAGS for the latter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why is there no `mpild` to do this automatically then?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not use LD=mpicc ?
</span><br>
<p>This will only work, when it is intended to use the original compiler  
<br>
as an interface to the linker. When it's calling the plain `ld` with  
<br>
native options like &quot;-rpath /home/reuti/lib&quot; this won't work, as e.g.  
<br>
for `gcc` this has to be coded like &quot; -Wl,-rpath -Wl,/home/reuti/lib&quot;  
<br>
to be forwarded to the linker.
<br>
<p>`mpild` should forward the plain `ld` options but automatically add  
<br>
all necessary Open MPI libs.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
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
<li><strong>Next message:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13467.php">Lisandro Dalcin: "Re: [OMPI users] Unable to include mpich library"</a>
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
