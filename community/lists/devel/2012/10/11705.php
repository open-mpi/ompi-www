<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 11:04:49 2012" -->
<!-- isoreceived="20121031150449" -->
<!-- sent="Wed, 31 Oct 2012 11:04:44 -0400" -->
<!-- isosent="20121031150444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="61330486-F44F-4D61-9847-0852BB5B7355_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYdZamWLCXjnmc+xJZWivjKzHSECW8hh0S3CRoEZ_dUGsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 11:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2012, at 9:38 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The rationale here is that correct MPI applications should not need to add any extra compiler files to compile without warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would disagree with this.  Compiler warnings are most useful when
</span><br>
<span class="quotelev1">&gt; they are on by default.  Only a few developers will turn on a warning
</span><br>
<span class="quotelev1">&gt; because warnings are hard to discover and enabling a warning requires
</span><br>
<span class="quotelev1">&gt; an explicit action from the developer.
</span><br>
<p>Understood, but:
<br>
<p>a) MPI explicitly allows this kind of deliberate mismatch.  It does not make sense to warn for things that are correct in MPI.
<br>
<p>b) Warnings are significantly less useful if the user looks at them and says, &quot;the compiler is wrong; I know that MPI says that this deliberate mismatch in my code is ok.&quot;
<br>
<p>c) as such, these warnings are really only useful for the application where type/MPI_Datatype matching is expected/desired.  
<br>
<p>Can these warnings be enabled as part of the warnings rollup -Wall option?  That would be an easy way to find/enable these warnings.
<br>
<p><span class="quotelev1">&gt; The pattern you described is an important one, but most MPI
</span><br>
<span class="quotelev1">&gt; applications will have matching buffer types/type tags.  
</span><br>
<p>I agree that most applications *probably* don't do this.  But significant developer in this community (i.e., Sandia) has at least multiple applications that *do* do it.  I can't ignore that.  :-(
<br>
<p><span class="quotelev1">&gt; Applications
</span><br>
<span class="quotelev1">&gt; that use code like that can disable the warning or silence it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the pattern you describe is extremely frequent, we could disable
</span><br>
<span class="quotelev1">&gt; checking for 'char *' buffer type, just like for 'void *'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev1">&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11706.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
