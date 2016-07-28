<?
$subject_val = "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 10:55:55 2015" -->
<!-- isoreceived="20150817145555" -->
<!-- sent="Mon, 17 Aug 2015 08:55:53 -0600" -->
<!-- isosent="20150817145553" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="20150817145553.GA30503_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUriWKaQP_aP=iaFLA2N6RjZNnZcHznc50rQ3n+_J9qCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-17 10:55:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17757.php">Jeff Squyres (jsquyres): "[OMPI devel] Web site FAQ update"</a>
<li><strong>In reply to:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is interesting. Let me look at the logic and see if I can determine
<br>
what is going wrong.
<br>
<p>It could be a naming issues. ie. opal_btl_vader_flags vs
<br>
btl_vader_flags. Both are valid names for the same variable but the
<br>
search may only be succeeding for one. Should be simple enought to
<br>
fix if that is the case.
<br>
<p>-Nathan
<br>
<p>On Fri, Aug 14, 2015 at 03:08:42PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    Another issue, maybe a little bit more unsettling.
</span><br>
<span class="quotelev1">&gt;    If I iterate over the existing pvars, and for each after retrieving their
</span><br>
<span class="quotelev1">&gt;    name I use the name to search for the associated index I get an error. A
</span><br>
<span class="quotelev1">&gt;    short example is below.
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt;        err = MPI_T_pvar_get_num(&amp;numPvar);
</span><br>
<span class="quotelev1">&gt;        if(err) MPI_Abort(MPI_COMM_WORLD, 0);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%d MPI Performance Variables\n&quot;, numPvar);
</span><br>
<span class="quotelev1">&gt;        for(i = 0; i &lt; numPvar; i++) {
</span><br>
<span class="quotelev1">&gt;          nameLen = sizeof(name);
</span><br>
<span class="quotelev1">&gt;          descLen = sizeof(desc);
</span><br>
<span class="quotelev1">&gt;          err = MPI_T_pvar_get_info(i, name, &amp;nameLen, &amp;verbosity,
</span><br>
<span class="quotelev1">&gt;                                    &amp;varClass, &amp;datatype, &amp;enumtype, desc,
</span><br>
<span class="quotelev1">&gt;                                    &amp;descLen, &amp;binding, &amp;isReadonly,
</span><br>
<span class="quotelev1">&gt;                                    &amp;isContinous, &amp;isAtomic);
</span><br>
<span class="quotelev1">&gt;          if( (MPI_SUCCESS != err) &amp;&amp; (MPI_T_ERR_INVALID_INDEX != err) ) {
</span><br>
<span class="quotelev1">&gt;            printf(&quot;Failed to read Pvar %d/%d\n&quot;, i, numPvar);
</span><br>
<span class="quotelev1">&gt;            MPI_Abort(MPI_COMM_WORLD, 0);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;    printf(&quot;\t%s\tClass-%d\tBinding-%d\tReadonly-%s\tContinous-%s\tAtomic-%s\t%s\n&quot;,
</span><br>
<span class="quotelev1">&gt;                 name, varClass, binding, isReadonly ? &quot;T&quot; : &quot;F&quot;,
</span><br>
<span class="quotelev1">&gt;                 isContinous ? &quot;T&quot; : &quot;F&quot;, isAtomic ? &quot;T&quot; : &quot;F&quot;, desc);
</span><br>
<span class="quotelev1">&gt;          err = MPI_T_pvar_get_index(name, binding, &amp;pvar_idx);
</span><br>
<span class="quotelev1">&gt;          if (err != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;            printf(&quot;cannot find %s pvar\n&quot;, name);
</span><br>
<span class="quotelev1">&gt;            MPI_Abort(MPI_COMM_WORLD, 0);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if( pvar_idx != i )
</span><br>
<span class="quotelev1">&gt;            printf(&quot;This is weird (%d != %d)!\n&quot;, pvar_idx, i);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    On Fri, Aug 14, 2015 at 2:36 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      For this particular test I used the current master (022a9d8).
</span><br>
<span class="quotelev1">&gt;      I reread the MPI_T chapter and [as usual] there might be something that
</span><br>
<span class="quotelev1">&gt;      cautions the current behavior (aka. returning MPI_T_ERR_INVALID_INDEX
</span><br>
<span class="quotelev1">&gt;      for an index smaller than the number of cvars returned
</span><br>
<span class="quotelev1">&gt;      by MPI_T_cvar_get_num). This is indicated by the example 14.4, page 576.
</span><br>
<span class="quotelev1">&gt;      If I exclude this return code from the list of errors, then things are
</span><br>
<span class="quotelev1">&gt;      working as expected.
</span><br>
<span class="quotelev1">&gt;      What is the community feeling? Should we reutrn the exact number of
</span><br>
<span class="quotelev1">&gt;      available cvars or an upper bound is a valid value?
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;      On Fri, Aug 14, 2015 at 2:21 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;      &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        George: what OMPI version did you test?
</span><br>
<span class="quotelev2">&gt;        &gt; On Aug 14, 2015, at 2:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        wrote:
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; This user email requires special attention, as it highlighted some
</span><br>
<span class="quotelev1">&gt;        issues with our MPI_T variables.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I wrote a short application to list all pvar and cvar available.
</span><br>
<span class="quotelev1">&gt;        Unexpectedly, listing the cvars leads to a lot of failures, 138 over
</span><br>
<span class="quotelev1">&gt;        1035 cvars. If a cvar is broken I would have expected (based on the
</span><br>
<span class="quotelev1">&gt;        reading of the MPI_T chapter) not to be able to iterate over them
</span><br>
<span class="quotelev1">&gt;        instead of getting an error. The tester is attached.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt;   George.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;        &gt; From: Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;        &gt; Date: Fri, Aug 14, 2015 at 11:14 AM
</span><br>
<span class="quotelev2">&gt;        &gt; Subject: [OMPI users] open mpi 1.8.6. MPI_T
</span><br>
<span class="quotelev2">&gt;        &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; Hello,
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I am trying to use MPI_T interface to set coll_tuned_bcast_algorithm
</span><br>
<span class="quotelev1">&gt;        mca parameter during run time, however I was not successful to do
</span><br>
<span class="quotelev1">&gt;        that.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I wonder if is it currently supported in Open MPI.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; I had the same problem with setting btl_self_eager_limit parameter.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; The code I am using attached below.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; Thanks.
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; --
</span><br>
<span class="quotelev2">&gt;        &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;        &gt; Khalid
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;        &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;        &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;        &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; &lt;pvar_list.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;        &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;        &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;        &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17744.php">http://www.open-mpi.org/community/lists/devel/2015/08/17744.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        --
</span><br>
<span class="quotelev1">&gt;        Jeff Squyres
</span><br>
<span class="quotelev1">&gt;        jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17745.php">http://www.open-mpi.org/community/lists/devel/2015/08/17745.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17747.php">http://www.open-mpi.org/community/lists/devel/2015/08/17747.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17758/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17757.php">Jeff Squyres (jsquyres): "[OMPI devel] Web site FAQ update"</a>
<li><strong>In reply to:</strong> <a href="17747.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
