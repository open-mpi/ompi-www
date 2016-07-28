<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 16:40:31 2008" -->
<!-- isoreceived="20081030204031" -->
<!-- sent="Thu, 30 Oct 2008 16:40:22 -0400" -->
<!-- isosent="20081030204022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="56BF90EA-F7AF-4112-B63C-C9EC53EA7891_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810300618g5d242266u6309905dbeb178d3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 16:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Previous message:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2008, at 9:18 AM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Understood; this was a more complete/precise meaning for my  
</span><br>
<span class="quotelev2">&gt;&gt; question &quot;Is
</span><br>
<span class="quotelev2">&gt;&gt; there any other OS where
</span><br>
<span class="quotelev2">&gt;&gt; dlsym() is present by RTLD_NEXT is not?&quot;  I suppose we can extend the
</span><br>
<span class="quotelev2">&gt;&gt; configure test to check for RTLD_NEXT as well.  In this way, that  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt; won't even decide to build itself.  You won't need this component,  
</span><br>
<span class="quotelev2">&gt;&gt; because
</span><br>
<span class="quotelev2">&gt;&gt; it's only really useful for the OpenFabrics and [ancient] Myricom  
</span><br>
<span class="quotelev2">&gt;&gt; GM drivers
</span><br>
<span class="quotelev2">&gt;&gt; in Open MPI, neither of which are likely to be supported in Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be good enough, at least for that part. Or testing first
</span><br>
<span class="quotelev1">&gt; for the presence of OpenFabrics or Myricom? Maybe it could just test
</span><br>
<span class="quotelev1">&gt; for the existence of GNU extensions? I don't know. I understand it
</span><br>
<span class="quotelev1">&gt; must be really hard to keep track of what is standard and what is not
</span><br>
<span class="quotelev1">&gt; these days. I'm just thankful that you guys are looking into it.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<p>My plate is pretty full trying to get v1.3.0 out the door and prepare  
<br>
for SC -- I don't know if this will be fixed before then.  But I've  
<br>
opened a ticket about it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1618">https://svn.open-mpi.org/trac/ompi/ticket/1618</a>
<br>
<p><span class="quotelev1">&gt; Well... I don't. It's just that, due to specifics of my work, I need
</span><br>
<span class="quotelev1">&gt; to work on a Windows computer, but I also like to use many unix
</span><br>
<span class="quotelev1">&gt; features / commands. So, I just use Cygwin out of convenience, which
</span><br>
<span class="quotelev1">&gt; in a way gives me the best of both worlds without the need to dual
</span><br>
<span class="quotelev1">&gt; boot.
</span><br>
<p>Fair enough.
<br>
<p><span class="quotelev1">&gt; However, the other reason I use Cygwin is because I work in the
</span><br>
<span class="quotelev1">&gt; development of a program and it is very convenient to do that in
</span><br>
<span class="quotelev1">&gt; Cygwin, especially when I'm traveling and only have access to my
</span><br>
<span class="quotelev1">&gt; laptop. Many users have this program running in Cygwin, so it's also
</span><br>
<span class="quotelev1">&gt; good to have a place to test it. I don't really use Cygwin for the
</span><br>
<span class="quotelev1">&gt; long &quot;production&quot; runs that would actually require a MPI, for that I
</span><br>
<span class="quotelev1">&gt; have access to local clusters or Teragrid. My problem is testing the
</span><br>
<span class="quotelev1">&gt; parallel version in Cygwin (or if any changes made break the parallel
</span><br>
<span class="quotelev1">&gt; implementation) because I still did not manage to install a MPI in
</span><br>
<span class="quotelev1">&gt; Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact, I have never tried a VM :-$ I guess I should give it a try
</span><br>
<span class="quotelev1">&gt; sometime. Do you have any recommendations? My only requirements are
</span><br>
<span class="quotelev1">&gt; that (i) it works, (ii) it's free.
</span><br>
<p>I don't know if there are free VM's or not, but you could try a 30 day  
<br>
free trial of vmware (or equivalent) and see if you like it.  IIRC,  
<br>
it's not terribly expensive if you end up liking it.  :-)
<br>
<p>FWIW: I use Parallels (an OS X VM) on my Mac because Cisco lives and  
<br>
dies by Outlook calendaring.  :-)
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
<li><strong>Next message:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Previous message:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
