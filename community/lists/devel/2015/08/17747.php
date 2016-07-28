<?
$subject_val = "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 15:08:44 2015" -->
<!-- isoreceived="20150814190844" -->
<!-- sent="Fri, 14 Aug 2015 15:08:42 -0400" -->
<!-- isosent="20150814190842" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="CAMJJpkUriWKaQP_aP=iaFLA2N6RjZNnZcHznc50rQ3n+_J9qCA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkXMCcp__PMH=4SWiRZPzqdQmxr9fg8VW6Yy6iXBi+D80g_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 15:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17748.php">Ralph Castain: "[OMPI devel] v1.10.0rc3 ready to be checked"</a>
<li><strong>Previous message:</strong> <a href="17746.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17746.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17758.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another issue, maybe a little bit more unsettling.
<br>
<p>If I iterate over the existing pvars, and for each after retrieving their
<br>
name I use the name to search for the associated index I get an error. A
<br>
short example is below.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_pvar_get_num(&amp;numPvar);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(err) MPI_Abort(MPI_COMM_WORLD, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d MPI Performance Variables\n&quot;, numPvar);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; numPvar; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nameLen = sizeof(name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descLen = sizeof(desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_pvar_get_info(i, name, &amp;nameLen, &amp;verbosity,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;varClass, &amp;datatype, &amp;enumtype, desc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;descLen, &amp;binding, &amp;isReadonly,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;isContinous, &amp;isAtomic);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( (MPI_SUCCESS != err) &amp;&amp; (MPI_T_ERR_INVALID_INDEX != err) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Failed to read Pvar %d/%d\n&quot;, i, numPvar);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>printf(&quot;\t%s\tClass-%d\tBinding-%d\tReadonly-%s\tContinous-%s\tAtomic-%s\t%s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name, varClass, binding, isReadonly ? &quot;T&quot; : &quot;F&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;isContinous ? &quot;T&quot; : &quot;F&quot;, isAtomic ? &quot;T&quot; : &quot;F&quot;, desc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_T_pvar_get_index(name, binding, &amp;pvar_idx);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;cannot find %s pvar\n&quot;, name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( pvar_idx != i )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;This is weird (%d != %d)!\n&quot;, pvar_idx, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>On Fri, Aug 14, 2015 at 2:36 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For this particular test I used the current master (022a9d8).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reread the MPI_T chapter and [as usual] there might be something that
</span><br>
<span class="quotelev1">&gt; cautions the current behavior (aka. returning MPI_T_ERR_INVALID_INDEX for
</span><br>
<span class="quotelev1">&gt; an index smaller than the number of cvars returned by MPI_T_cvar_get_num).
</span><br>
<span class="quotelev1">&gt; This is indicated by the example 14.4, page 576. If I exclude this return
</span><br>
<span class="quotelev1">&gt; code from the list of errors, then things are working as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the community feeling? Should we reutrn the exact number of
</span><br>
<span class="quotelev1">&gt; available cvars or an upper bound is a valid value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 14, 2015 at 2:21 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George: what OMPI version did you test?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 14, 2015, at 2:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This user email requires special attention, as it highlighted some
</span><br>
<span class="quotelev2">&gt;&gt; issues with our MPI_T variables.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I wrote a short application to list all pvar and cvar available.
</span><br>
<span class="quotelev2">&gt;&gt; Unexpectedly, listing the cvars leads to a lot of failures, 138 over 1035
</span><br>
<span class="quotelev2">&gt;&gt; cvars. If a cvar is broken I would have expected (based on the reading of
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_T chapter) not to be able to iterate over them instead of getting
</span><br>
<span class="quotelev2">&gt;&gt; an error. The tester is attached.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From: Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: Fri, Aug 14, 2015 at 11:14 AM
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: [OMPI users] open mpi 1.8.6. MPI_T
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to use MPI_T interface to set coll_tuned_bcast_algorithm
</span><br>
<span class="quotelev2">&gt;&gt; mca parameter during run time, however I was not successful to do that.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I wonder if is it currently supported in Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I had the same problem with setting btl_self_eager_limit parameter.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The code I am using attached below.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Khalid
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27470.php">http://www.open-mpi.org/community/lists/users/2015/08/27470.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;pvar_list.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17744.php">http://www.open-mpi.org/community/lists/devel/2015/08/17744.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17745.php">http://www.open-mpi.org/community/lists/devel/2015/08/17745.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17748.php">Ralph Castain: "[OMPI devel] v1.10.0rc3 ready to be checked"</a>
<li><strong>Previous message:</strong> <a href="17746.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17746.php">George Bosilca: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17758.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Reply:</strong> <a href="17759.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
