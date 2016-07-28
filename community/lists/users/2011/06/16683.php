<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 21:01:31 2011" -->
<!-- isoreceived="20110607010131" -->
<!-- sent="Mon, 6 Jun 2011 21:01:26 -0400" -->
<!-- isosent="20110607010126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="4E11B3C9-A898-4C21-B8E0-EBDF24D35DA7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DDFD6F3.2080700_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 21:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16684.php">Jeff Squyres: "Re: [OMPI users] difference between MTL and BTL"</a>
<li><strong>Previous message:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16649.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done -- how's this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
<br>
<p><p><p>On May 27, 2011, at 12:53 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/2011 4:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 27, 2011, at 4:30 AM, Robert Horton wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To be clear, if you explicitly list which BTLs to use, OMPI will only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (try to) use exactly those and no others.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It might be worth putting the sm btl in the FAQ:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this entry not clear enough?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
</span><br>
<span class="quotelev2">&gt;&gt; I think his point is that the example in the ib-btl entry would be more helpful as a template for usage if it added sm.  Why point users to a different FAQ entry (which we don't do anyhow) when three more characters &quot;,sm&quot; makes the ib-btl entry so much more helpful.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Eugene and Robert.
</span><br>
<span class="quotelev1">&gt; By all means, please add &quot;,sm&quot; to &quot;openib,self&quot; in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am yet to see a situation where you want to run with openib and self,
</span><br>
<span class="quotelev1">&gt; but exclude sm (except for testing, perhaps when memcpy is broken).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe that is what led Salvatore Podda think there was a
</span><br>
<span class="quotelev1">&gt; &quot;Law of Least Astonishment&quot; behind the mca parameters syntax,
</span><br>
<span class="quotelev1">&gt; which would insert &quot;sm&quot; automatically to the other two btl,
</span><br>
<span class="quotelev1">&gt; which is not really the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like Salvatore, I've got confused by the mca parameter
</span><br>
<span class="quotelev1">&gt; syntax in the past also.
</span><br>
<span class="quotelev1">&gt; My recollection is that Jeff wrote the second
</span><br>
<span class="quotelev1">&gt; FAQ to placate my whining in the list about
</span><br>
<span class="quotelev1">&gt; to sm or not to sm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the second FAQ clarifies the mca parameter logic,
</span><br>
<span class="quotelev1">&gt; along with the role of the &quot;^&quot; clause, and IMHO should be kept there:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16684.php">Jeff Squyres: "Re: [OMPI users] difference between MTL and BTL"</a>
<li><strong>Previous message:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16649.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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
