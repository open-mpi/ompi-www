<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 22 14:09:14 2005" -->
<!-- isoreceived="20050922190914" -->
<!-- sent="Thu, 22 Sep 2005 14:09:11 -0500" -->
<!-- isosent="20050922190911" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="83378e44d08c9f15d21e91a53018ad3c_at_indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4332F042.60907_at_cs.utk.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-22 14:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm going to take a stab at this, though Jeff should be the definitive 
<br>
authority on how this all works.
<br>
<p>There is a thread that I think went mostly off-list titled '64bit 
<br>
shared library problems'.
<br>
<p>The old method of not putting lib{opal,orte,mpi}.la (where appropriate) 
<br>
meant that components were not explicitly linked against those 
<br>
libraries.  Within Open-MPI itself, this is fine.  When those 
<br>
components are dlopen()'d, the application doing so has already loaded 
<br>
the lib{opal,orte,mpi} libraries in a global scope (RTLD_GLOBAL), so 
<br>
all symbols are properly (but indirectly) resolved.
<br>
<p>Recently a problem came up with someone doing some ompi integration 
<br>
into Eclipse.  What happens there is that the lib{opal,orte,mpi} 
<br>
libraries are not loaded in a global scope, ie, without RTLD_GLOBAL.    
<br>
Eclipse has reasons for doing this, though I don't know what they are.  
<br>
The problem, then, is that when components are loaded, they cannot 
<br>
resolve the symbols they need from the lib{opal,orte,mpi}.la libraries.
<br>
<p>So what this solution does is explicitly link all the components 
<br>
against the appropriate libraries, thus allowing symbols to be resolved 
<br>
when the application has not made such libraries available.
<br>
<p>Does this help at all?
<br>
<p>Andrew
<br>
<p>On Sep 22, 2005, at 12:56 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think I miss some discussion on the mailing list about the
</span><br>
<span class="quotelev1">&gt; modification of the Makefile.am. I would like to know why we need this 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now we get this message for all .so file we generate:
</span><br>
<span class="quotelev1">&gt;     libtool: install: warning: relinking `*.la'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
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
