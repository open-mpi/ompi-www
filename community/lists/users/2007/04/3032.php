<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 07:51:51 2007" -->
<!-- isoreceived="20070406115151" -->
<!-- sent="Fri, 6 Apr 2007 07:51:37 -0400" -->
<!-- isosent="20070406115137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Grid launcher question." -->
<!-- id="31071181-B8F7-4F5C-B718-0F0BD18409C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="515C1EEC6C326C4C8822294F0A73E6A205727160_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
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
<strong>Date:</strong> 2007-04-06 07:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="3027.php">Xie, Hugh: "[OMPI users] Grid launcher question."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 5, 2007, at 3:19 PM, Xie, Hugh wrote:
<br>
<p><span class="quotelev1">&gt; Have anyone attempt to integrate ompi with commercial grid scheduler
</span><br>
<span class="quotelev1">&gt; (e.g. Platform Symphony). The integration would be similar to
</span><br>
<span class="quotelev1">&gt; LoadLeveler. I am trying to understand if the integration can be done
</span><br>
<span class="quotelev1">&gt; simply without Platform Symphony's change their code. Otherwise, I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; to contact them for getting a integration patch.
</span><br>
<p>Are you asking specifically about the LSF scheduler that is contained  
<br>
in the Symphony product?  If so, there are 2 answers to your question:
<br>
<p>1. Platform is distributing their own integration with Open MPI in  
<br>
the LSF scheduler.  They had an update for LSF within the last  
<br>
several months that introduced the Open MPI/LSF integration, and will  
<br>
likely have another update in the not-distant future.
<br>
<p>2. We're working with Platform on a native Open MPI/LSF integration  
<br>
that would make the Platform-supplied Open MPI/LSF integration  
<br>
unnecessary, but the timeline for release is not yet available.
<br>
<p><p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
</span><br>
<span class="quotelev1">&gt; - - - - - - - - - -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is intended only for the personal and confidential use  
</span><br>
<span class="quotelev1">&gt; of the designated recipient(s) named above.  If you are not the  
</span><br>
<span class="quotelev1">&gt; intended recipient of this message you are hereby notified that any  
</span><br>
<span class="quotelev1">&gt; review, dissemination, distribution or copying of this message is  
</span><br>
<span class="quotelev1">&gt; strictly prohibited.  This communication is for information  
</span><br>
<span class="quotelev1">&gt; purposes only and should not be regarded as an offer to sell or as  
</span><br>
<span class="quotelev1">&gt; a solicitation of an offer to buy any financial product, an  
</span><br>
<span class="quotelev1">&gt; official confirmation of any transaction, or as an official  
</span><br>
<span class="quotelev1">&gt; statement of Lehman Brothers.  Email transmission cannot be  
</span><br>
<span class="quotelev1">&gt; guaranteed to be secure or error-free.  Therefore, we do not  
</span><br>
<span class="quotelev1">&gt; represent that this information is complete or accurate and it  
</span><br>
<span class="quotelev1">&gt; should not be relied upon as such.  All information is subject to  
</span><br>
<span class="quotelev1">&gt; change without notice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; IRS Circular 230 Disclosure:
</span><br>
<span class="quotelev1">&gt; Please be advised that any discussion of U.S. tax matters contained  
</span><br>
<span class="quotelev1">&gt; within this communication (including any attachments) is not  
</span><br>
<span class="quotelev1">&gt; intended or written to be used and cannot be used for the purpose  
</span><br>
<span class="quotelev1">&gt; of (i) avoiding U.S. tax related penalties or (ii) promoting,  
</span><br>
<span class="quotelev1">&gt; marketing or recommending to another party any transaction or  
</span><br>
<span class="quotelev1">&gt; matter addressed herein.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="3027.php">Xie, Hugh: "[OMPI users] Grid launcher question."</a>
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
