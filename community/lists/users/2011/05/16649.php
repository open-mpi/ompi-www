<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 12:53:16 2011" -->
<!-- isoreceived="20110527165316" -->
<!-- sent="Fri, 27 May 2011 12:53:07 -0400" -->
<!-- isosent="20110527165307" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="4DDFD6F3.2080700_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DDFCD96.4000503_at_oracle.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-27 12:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16648.php">Eugene Loh: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16648.php">Eugene Loh: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; On 5/27/2011 4:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2011, at 4:30 AM, Robert Horton wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be clear, if you explicitly list which BTLs to use, OMPI will only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (try to) use exactly those and no others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It might be worth putting the sm btl in the FAQ:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev2">&gt;&gt; Is this entry not clear enough?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
</span><br>
<span class="quotelev1">&gt; I think his point is that the example in the ib-btl entry would be more 
</span><br>
<span class="quotelev1">&gt; helpful as a template for usage if it added sm.  Why point users to a 
</span><br>
<span class="quotelev1">&gt; different FAQ entry (which we don't do anyhow) when three more 
</span><br>
<span class="quotelev1">&gt; characters &quot;,sm&quot; makes the ib-btl entry so much more helpful.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Hi Jeff, list
<br>
<p>I agree with Eugene and Robert.
<br>
By all means, please add &quot;,sm&quot; to &quot;openib,self&quot; in:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
<br>
<p>I am yet to see a situation where you want to run with openib and self,
<br>
but exclude sm (except for testing, perhaps when memcpy is broken).
<br>
<p>Maybe that is what led Salvatore Podda think there was a
<br>
&quot;Law of Least Astonishment&quot; behind the mca parameters syntax,
<br>
which would insert &quot;sm&quot; automatically to the other two btl,
<br>
which is not really the case.
<br>
<p>Like Salvatore, I've got confused by the mca parameter
<br>
syntax in the past also.
<br>
My recollection is that Jeff wrote the second
<br>
FAQ to placate my whining in the list about
<br>
to sm or not to sm.
<br>
<p>However, the second FAQ clarifies the mca parameter logic,
<br>
along with the role of the &quot;^&quot; clause, and IMHO should be kept there:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16648.php">Eugene Loh: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16648.php">Eugene Loh: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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
