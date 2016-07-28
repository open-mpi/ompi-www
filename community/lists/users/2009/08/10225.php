<?
$subject_val = "Re: [OMPI users] Kerberos ticket forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 13:58:09 2009" -->
<!-- isoreceived="20090806175809" -->
<!-- sent="Thu, 6 Aug 2009 13:58:04 -0400" -->
<!-- isosent="20090806175804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Kerberos ticket forwarding" -->
<!-- id="9F62AC75-9317-455A-8D65-A2688AF36291_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A78A4FC.7010007_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Kerberos ticket forwarding<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 13:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2009, at 5:15 PM, Jean-Christophe Ducom wrote:
<br>
<p><span class="quotelev1">&gt; When I try
</span><br>
<span class="quotelev1">&gt; dqcneh001$ mpirun -np 1 -H  dqcneh002 -mca plm_rsh_agent
</span><br>
<span class="quotelev1">&gt; &quot;/usr/kerberos/bin/rsh -F&quot;  klist
</span><br>
<span class="quotelev1">&gt; klist: No credentials cache found (ticket cache FILE:/tmp/ 
</span><br>
<span class="quotelev1">&gt; krb5cc_p3651)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kerberos 4 ticket cache: /tmp/tkt82784
</span><br>
<span class="quotelev1">&gt; klist: You have no tickets cached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Kerberos ticket is not forwarded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Strange.  I'm afraid I don't use a kerberos-based rsh, so I don't know  
<br>
what it's looking for that it's not finding.  What happens under the  
<br>
covers in OMPI is that we use &quot;rsh -F&quot; to launch the &quot;orted&quot; process  
<br>
on the remote node.  After some network back-n-forth, the orted fork/ 
<br>
exec's your executable (klist, in this case).  Nothing too special  
<br>
there.
<br>
<p>Do you know what klist is doing to determine that it doesn't have any  
<br>
credentials?  E.g., does that file /tmp/krb5cc_p3651 exist, or no?  Is  
<br>
there some environment variable that it passes that filename through  
<br>
that we're somehow not passing down through the orted to the executable?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
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
