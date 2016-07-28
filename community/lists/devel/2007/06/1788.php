<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 29 13:24:35 2007" -->
<!-- isoreceived="20070629172435" -->
<!-- sent="Fri, 29 Jun 2007 13:24:24 -0400" -->
<!-- isosent="20070629172424" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="03129C51-DF9D-48C7-87E2-E449A015C3C7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070628171712.GA23691_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-29 13:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1789.php">Dirk Eddelbuettel: "[OMPI devel] Contributed manual pages for opal_wrapper, ompi_info and orted"</a>
<li><strong>Previous message:</strong> <a href="1787.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1787.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>Here are my findings with TCP and MX. In fact for TCP results on  
<br>
heterogeneous networks we should wait one or two days (still  
<br>
upgrading my cluster). But I go some very interesting results for MX.
<br>
<p>Thanks to Myricom guys for the access to their resources. I was able  
<br>
to run Open MPI on a cluster with 2 Myricom interfaces, a 10Gbs and a  
<br>
2Gbs. The green and violet lines are for the 2Gbs respectively for  
<br>
the 10Gbs interfaces. The blue line is for the current version, as in  
<br>
a fresh check-out. As you can see the bandwidth is getting a little  
<br>
bit higher than the 10g, but still far from what it should be (in  
<br>
numbers we get 9.3Gbs over the 10g, 1.9 over the 2g and 10Gb over  
<br>
both of them). Then I start applying the patches. First, the Gleb  
<br>
original patch, the one without the dynamic scheduling. This is the  
<br>
red line. There seems to be no apparent difference between the trunk  
<br>
and the version with this patch (there is barely few Mbs more with  
<br>
the patch when I look at the numbers). Then I went on and added the  
<br>
second patch, the one adding the dynamic routing. And there we got  
<br>
some interesting results, i.e. the yellow line. We are at about 98%  
<br>
of the theoretical bandwidth (i.e. the sum of the max over each  
<br>
interfaces). Which is pretty good.
<br>
<p>I think Gleb's second patch is the right way to go. Feel free to  
<br>
commit as soon as you want.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>

<br><p>
<p>On Jun 28, 2007, at 1:17 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jun 28, 2007 at 12:02:14PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not against the patch (at least not against your second version).
</span><br>
<span class="quotelev2">&gt;&gt; I really want to have the dynamic way to feed the BTLs based on the
</span><br>
<span class="quotelev2">&gt;&gt; order in which they complete the previous send. Give me one or two
</span><br>
<span class="quotelev2">&gt;&gt; days, I want to test your patch on a heterogeneous Ethernet
</span><br>
<span class="quotelev2">&gt;&gt; environment, and right now my cluster is enjoying an upgrade.
</span><br>
<span class="quotelev1">&gt; No problem. I also will be glad if you'll be able to test with  
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev1">&gt; Myricom networks and mixed Myricom/ethernet environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2007, at 10:06 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobody except George haven't commented/complained about this patch,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume everybody except George are OK with it. And from George  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mails I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't understand if he is OK with me applying it to the trunk and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he simply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thinks that further work should be done in this area. So I'll ask  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; him
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly: George are you OK with me putting the patch into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk? ;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1788/mx-10g-2g-gleb-patch.pdf">mx-10g-2g-gleb-patch.pdf</a>
</ul>
<!-- attachment="mx-10g-2g-gleb-patch.pdf" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1788/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1789.php">Dirk Eddelbuettel: "[OMPI devel] Contributed manual pages for opal_wrapper, ompi_info and orted"</a>
<li><strong>Previous message:</strong> <a href="1787.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1787.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
