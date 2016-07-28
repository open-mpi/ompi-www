<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus  valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:29:54 2009" -->
<!-- isoreceived="20090429192954" -->
<!-- sent="Wed, 29 Apr 2009 15:29:49 -0400" -->
<!-- isosent="20090429192949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus  valgrind record" -->
<!-- id="4AA6E6E2-8309-4888-BCF8-D855FB76FCA4_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49EFA9C3.8020905_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus  valgrind record<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9069.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2009, at 7:35 PM, Fran&#231;ois PELLEGRINI wrote:
<br>
<p><span class="quotelev1">&gt; I have had no answers regarding the trouble (OpenMPI bug ?)
</span><br>
<span class="quotelev1">&gt; I evidenced when combining OpenMPI and valgrind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in getting back to you; there are so many mails  
<br>
and only so many hours in the day...  :-(
<br>
<p><span class="quotelev1">&gt; I tried it with a newer version of OpenMPI, and the problems
</span><br>
<span class="quotelev1">&gt; persist, with new, even more worrying, error messages being  
</span><br>
<span class="quotelev1">&gt; displayed :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==32142== Warning: client syscall munmap tried to modify addresses  
</span><br>
<span class="quotelev1">&gt; 0xFFFFFFFF-0xFFE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (but this happens for all the programs I tried)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The original error messages, which are still here, were the
</span><br>
<span class="quotelev1">&gt; following :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==32143== Source and destination overlap in memcpy(0x4A73DA8,  
</span><br>
<span class="quotelev1">&gt; 0x4A73DB0, 16)
</span><br>
<span class="quotelev1">&gt; ==32143==    at 0x40236C9: memcpy (mc_replace_strmem.c:402)
</span><br>
<span class="quotelev1">&gt; ==32143==    by 0x407C9DC: ompi_ddt_copy_content_same_ddt (dt_copy.c: 
</span><br>
<span class="quotelev1">&gt; 171)
</span><br>
<span class="quotelev1">&gt; ==32143==    by 0x512EA61: ompi_coll_tuned_allgather_intra_bruck
</span><br>
<span class="quotelev1">&gt; (coll_tuned_allgather.c:193)
</span><br>
<span class="quotelev1">&gt; ==32143==    by 0x5126D90: ompi_coll_tuned_allgather_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:562)
</span><br>
<span class="quotelev1">&gt; ==32143==    by 0x408986A: PMPI_Allgather (pallgather.c:101)
</span><br>
<span class="quotelev1">&gt; ==32143==    by 0x80487D7: main (in /tmp/brol)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not get this &quot;memcpy&quot; messages when running on 2 processors.
</span><br>
<span class="quotelev1">&gt; I therefore assume it is a rounding problem wrt the number of procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good.  This is possibly related to a post from last night:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/04/9138.php">http://www.open-mpi.org/community/lists/users/2009/04/9138.php</a>.
<br>
<p>Some of the valgrind warnings are unavoidable, unfortunately -- e.g.,  
<br>
those within system calls.  Note that you *can* avoid the valgrind  
<br>
warnings in PLPA (the linux paffainity component) if you configure  
<br>
OMPI --with-valgrind.  This will proagmatically tell valgrind that the  
<br>
memory access that PLPA is doing &quot;is ok&quot; (i.e., it's specifically  
<br>
intended to be an error for long/complicated reasons).
<br>
<p>But I'm able to replicate your error (but shouldn't the 2nd buffer be  
<br>
the 1st + size (not 2)?) -- let me dig into it a bit... we definitely  
<br>
shouldn't be getting invalid writes in the convertor, etc.
<br>
<p>I've filed ticket #1903 about this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1903">https://svn.open-mpi.org/trac/ompi/ticket/1903</a>
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
<li><strong>Next message:</strong> <a href="9146.php">Jeff Squyres: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9069.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
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
