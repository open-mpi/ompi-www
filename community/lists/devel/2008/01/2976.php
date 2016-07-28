<?
$subject_val = "Re: [OMPI devel] Integrating the memchecker branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 23:15:00 2008" -->
<!-- isoreceived="20080115041500" -->
<!-- sent="Mon, 14 Jan 2008 22:12:39 -0600" -->
<!-- isosent="20080115041239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Integrating the memchecker branch" -->
<!-- id="A216D84D-2C37-4CFA-BF52-B9ECBE1A14CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801082111.48859.keller_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Integrating the memchecker branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-14 23:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="2945.php">Rainer Keller: "[OMPI devel] Integrating the memchecker branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not had a chance to check out the tmp branch for this (I'm  
<br>
currently in an airport without network access), but it all sounds  
<br>
good in principle to me.  Forgive me if I've said these things before,  
<br>
but here's what I'd like to see if possible:
<br>
<p>- configure output shows whether this stuff is enabled
<br>
&nbsp;&nbsp;&nbsp;- e.g., does it check for the relevant macros in valgrind's header  
<br>
files?  (I assume so; I've totally forgotten...)  Ensure that these  
<br>
checks are output in configure's stdout
<br>
<p>- ompi_info shows whether this stuff is enabled
<br>
<p>- obvious user-level configure errors raise errors/abort configure  
<br>
(E.g., --enable-memchecker is specified but --enable-debug is not), or  
<br>
make some obvious assumptions about &quot;what the user meant&quot; (e.g., if -- 
<br>
enable-memchecker is specified by --enable-debug is not, then  
<br>
automatically enable --enable-debug and output a message saying so).
<br>
<p>- I think we've said ad nauseam that there should be zero performance  
<br>
penalty for when this stuff is not enabled, and I'm guessing that this  
<br>
is still true.  :-)
<br>
<p>- some kind of documentation should be written up about how to use  
<br>
this stuff, perhaps in the FAQ (e.g., pairing it with a valgrind- 
<br>
enabled libibverbs for max benefit, etc.).
<br>
<p><p><p><span class="quotelev1">&gt; If --enable-memchecker is on, --enable-debug should be on as well to  
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; sense
</span><br>
<p><p>On Jan 8, 2008, at 3:11 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; We would like to integrate the changes on the memchecker-branch to  
</span><br>
<span class="quotelev1">&gt; trunk, as
</span><br>
<span class="quotelev1">&gt; planned in the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; The checking offers memory checking for certain User and OMPI- 
</span><br>
<span class="quotelev1">&gt; internal errors,
</span><br>
<span class="quotelev1">&gt; like buffer overruns, size mismatches, checks for wrong send/receive  
</span><br>
<span class="quotelev1">&gt; buffers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: OMPI trunk and v1.3 phase3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN:
</span><br>
<span class="quotelev1">&gt; Integration into Trunk of memchecker branch: 25.1. (although off-by- 
</span><br>
<span class="quotelev1">&gt; default,
</span><br>
<span class="quotelev1">&gt; this leaves enough time before Feature Freeze on 8.2.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: None
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The memchecker branch contains checks for memory buffer faults  
</span><br>
<span class="quotelev1">&gt; either in the
</span><br>
<span class="quotelev1">&gt; User-Code or in ompi-code itself.
</span><br>
<span class="quotelev1">&gt; It uses the valgrind-API to set/reset buffer validity of the user  
</span><br>
<span class="quotelev1">&gt; buffers
</span><br>
<span class="quotelev1">&gt; passed to the MPI-layer. Additionally ompi-internal datatypes are  
</span><br>
<span class="quotelev1">&gt; checked
</span><br>
<span class="quotelev1">&gt; for.
</span><br>
<span class="quotelev1">&gt; Both are configurable using the flags:
</span><br>
<span class="quotelev1">&gt;   --enable-memchecker
</span><br>
<span class="quotelev1">&gt;   --with-valgrind=DIR (if needed)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A decent/recent valgrind is needed (for getting and setting VBITS/ 
</span><br>
<span class="quotelev1">&gt; using the
</span><br>
<span class="quotelev1">&gt; newer macros). The valgrind-version is being checked for, at least  
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; 3.2.0 is required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The actual checking is done in the MPI-layer, in order not to trap any
</span><br>
<span class="quotelev1">&gt; (correct) access in the BTL, the user buffer is reset to accessible  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; PML-layer (currently OB1 -- others won't make much sense?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default behaviour is to *NOT* enable memchecker.
</span><br>
<span class="quotelev1">&gt; If it is enabled, but not valgrind is being run, the costs for the  
</span><br>
<span class="quotelev1">&gt; buffer
</span><br>
<span class="quotelev1">&gt; checks are minimal, the costs for each ompi-datastructure (like  
</span><br>
<span class="quotelev1">&gt; datatype, or
</span><br>
<span class="quotelev1">&gt; communicator passed) is not.
</span><br>
<span class="quotelev1">&gt; Further information regarding penalties and performance may be found  
</span><br>
<span class="quotelev1">&gt; in:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/papers/parco-2007">http://www.open-mpi.org/papers/parco-2007</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments from the Paris meeting have been integrated.
</span><br>
<span class="quotelev1">&gt; Are there any objections or hints?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Shiqing and Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: If --enable-memchecker is on, --enable-debug should be on as  
</span><br>
<span class="quotelev1">&gt; well to make
</span><br>
<span class="quotelev1">&gt; sense.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;  HLRS                          Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;  Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;  70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Germany                             AIM/Skype:rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Emails save time, not printing them saves trees!&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="2945.php">Rainer Keller: "[OMPI devel] Integrating the memchecker branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
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
