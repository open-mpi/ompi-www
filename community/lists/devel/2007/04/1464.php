<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 29 10:18:12 2007" -->
<!-- isoreceived="20070429141812" -->
<!-- sent="Sun, 29 Apr 2007 10:18:01 -0400" -->
<!-- isosent="20070429141801" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sockaddr* vs. sockaddr_storage*" -->
<!-- id="1F590198-4ADA-428E-B434-970BBC36C13E_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070429140016.GE14385_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-29 10:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1463.php">Adrian Knoth: "[OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1463.php">Adrian Knoth: "[OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's against my &quot;religion&quot; to back off someone else commit. First I  
<br>
try to understand why and how to fix it. After the IPv6 commit, it  
<br>
took me 2 days to bring the trunk back to the stage where it was  
<br>
before (i.e. restore the lost functionality).
<br>
<p>I have to ask you to remove r14549 quickly as it bring back the trunk  
<br>
to the stage it was before r14544 (only random support for multiple  
<br>
BTL). It's not that I don't care about IPv6, it's just that I care  
<br>
more about multi TCP BTL working in the way it is supposed to work.  
<br>
Moreover, I'm sure it's not the real fix you're looking for.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: Please read the commit log for the r14544. It explain why I  
<br>
changed from sockaddr_storage* to sockaddr*.
<br>
<p>On Apr 29, 2007, at 10:00 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; Hi, especially bosilca (George?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r14544 broke the IPv6 support (see Ticket #1008). I've committed a  
</span><br>
<span class="quotelev1">&gt; quick
</span><br>
<span class="quotelev1">&gt; patch, but I guess we (George and me?) will have to look closer in  
</span><br>
<span class="quotelev1">&gt; order
</span><br>
<span class="quotelev1">&gt; to provide the desired functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's another question concerning r14544: why did you change
</span><br>
<span class="quotelev1">&gt; sockaddr_storage* to sockaddr* for some btl/tcp functions? Is there
</span><br>
<span class="quotelev1">&gt; something special about sockaddr*? For me, sockaddr_storage is a
</span><br>
<span class="quotelev1">&gt; complete replacement for sockaddr... we also have the necessary  
</span><br>
<span class="quotelev1">&gt; defines
</span><br>
<span class="quotelev1">&gt; in ipv6compat.h, so we could always make use of ss_family.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheerio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1464/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1463.php">Adrian Knoth: "[OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1463.php">Adrian Knoth: "[OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
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
