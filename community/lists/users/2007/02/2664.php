<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 11 08:21:41 2007" -->
<!-- isoreceived="20070211132141" -->
<!-- sent="Sun, 11 Feb 2007 08:21:35 -0500" -->
<!-- isosent="20070211132135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="A91B3811-DBC6-4A7E-94F1-8014B04415EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44233CA5B57295409DA4423AECEFFEE701E64DDE_at_mailbox01.cshl.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-11 08:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Vadivelan Ranjith: "[OMPI users] Error using MPI_WAITALL"</a>
<li><strong>In reply to:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2007, at 6:05 PM, Heywood, Todd wrote:
<br>
<p><span class="quotelev1">&gt; I know this is an OpenMPI list, but does anyone know how common or  
</span><br>
<span class="quotelev1">&gt; uncommon LDAP-based clusters are? I would have thought this issue  
</span><br>
<span class="quotelev1">&gt; would have arisen elsewhere, but Googling MPI+LDAP (and similar)  
</span><br>
<span class="quotelev1">&gt; doesn't turn up much.
</span><br>
<p>FWIW, when I was back at Indiana University, we had a similar issue  
<br>
with a 128 node cluster -- starting parallel jobs would overwhelm the  
<br>
central slapd's and logins would start failing.
<br>
<p>IIRC, the admins tried a variety of things that didn't end up working  
<br>
or were too complicated to maintain in the long term.  So they ended  
<br>
up replicating the /etc/shadow and /etc/passwd from LDAP every X  
<br>
hours (24, I think?) so that all authentications on the cluster were  
<br>
local.  Then they simply disallowed changing user information the  
<br>
cluster (password, shell, etc.) and said &quot;if you want to change  
<br>
information, change it elsewhere and it will sync to the cluster  
<br>
within X hours&quot;.
<br>
<p>Not an optimal solution, but it was the one they opted for because  
<br>
all things being equal, I think it was the simplest.
<br>
<p>This is all from quite a while ago, so I might not have the details  
<br>
exactly correct.
<br>
<p>I don't know much about LDAP, but if proxying / caching LDAP servers  
<br>
exist, it might help considerably (e.g., put a caching proxy on the  
<br>
cluster head node that can respond quickly to hundreds of  
<br>
simultaneous LDAP requests from across the cluster instead of having  
<br>
the cluster nodes all talk to a central LDAP server).  I don't know  
<br>
if that even makes sense (caching LDAP queries), but it was just a  
<br>
thought...
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Vadivelan Ranjith: "[OMPI users] Error using MPI_WAITALL"</a>
<li><strong>In reply to:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
