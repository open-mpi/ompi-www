<?
$subject_val = "Re: [OMPI users] MPI flavor-agnostic libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 10:00:28 2009" -->
<!-- isoreceived="20090114150028" -->
<!-- sent="Wed, 14 Jan 2009 10:00:19 -0500" -->
<!-- isosent="20090114150019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI flavor-agnostic libraries" -->
<!-- id="AFA35E3B-AE62-45BC-8083-D5293E3856E2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF30AFFC2D.54157A4C-ON8525753E.005048EA-8525753E.005175B5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI flavor-agnostic libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 10:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2009, at 9:49 AM, Gregory D Abram wrote:
<br>
<p><span class="quotelev1">&gt; I'd like to release binary libraries that use MPI but are agnostic  
</span><br>
<span class="quotelev1">&gt; as to which flavor or MPI (eg. OpenMPI, MVAPICH, LAM...) that is  
</span><br>
<span class="quotelev1">&gt; used by the application linking the libraries. I've seen that there  
</span><br>
<span class="quotelev1">&gt; are some significant differences that stand in the way, for example  
</span><br>
<span class="quotelev1">&gt; that MPI_Comm is a pointer on OpenMPI and an integer on MVAPICH. I  
</span><br>
<span class="quotelev1">&gt; can see some ways that might work, but they are pretty complex - for  
</span><br>
<span class="quotelev1">&gt; example, I could create an intercept library that loads a real MPI  
</span><br>
<span class="quotelev1">&gt; library explicitly and do whatever needs be done (for example,  
</span><br>
<span class="quotelev1">&gt; translating MPI_Comm parameters). Does anyone know of anything that  
</span><br>
<span class="quotelev1">&gt; might help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This is the age-old &quot;there is no MPI ABI&quot; issue.  :-\  The root of the  
<br>
issue is that MPI is [at least currently] defined to be source code  
<br>
compatible, not binary compatible.
<br>
<p>A &quot;MorphMPI&quot; solution has been proposed and discussed many times  
<br>
(similar to what you describe -- a thin intercept layer than acts as a  
<br>
translator to multiple back-end MPI implementations, probably loaded  
<br>
dynamically at run-time), but no one has implemented a general purpose  
<br>
solution that could be standardized across/used by any MPI software  
<br>
package.
<br>
<p>Most MPI software packages either distribute binaries for each  
<br>
different MPI implementation that they want to support or distribute  
<br>
source code and allow themselves to be compiled against multiple  
<br>
different MPI implementations (which, these days, isn't too  
<br>
difficult).  Neither of these are optimal solutions, obviously.
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
<li><strong>Next message:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
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
