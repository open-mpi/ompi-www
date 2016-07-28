<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 18:07:58 2012" -->
<!-- isoreceived="20120502220758" -->
<!-- sent="Wed, 2 May 2012 18:07:54 -0400" -->
<!-- isosent="20120502220754" -->
<!-- name="Evan Clinton" -->
<!-- email="evan.m.clinton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="CALQMFq2-7UAq1bQvkOsa+eM85JX6oRM8kSR+y1KGcy7Z+66EbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALeDE9Pw1whzozUHGc_-xfiAvGVugQmA-SUtiuP6Z0H2AJqk9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Evan Clinton (<em>evan.m.clinton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 18:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I mean to say is that, as far as I can tell, in Open MPI's
<br>
configure stuff there's a switch based on what it detects the host
<br>
processor as (and this detection could be overridden by specifying the
<br>
--host= thing); this is probably not the best way to do it.
<br>
<p>(sorry for the double-post again, dangit)
<br>
<p>On Wed, May 2, 2012 at 5:52 PM, Peter Robinson &lt;pbrobinson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, May 2, 2012 at 10:38 PM, Evan Clinton &lt;evan.m.clinton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Fedora guys are having trouble building the armv5tel variant (well, they did before this patch too, but... :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log">http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I think the problem is that the build system is not playing nicely
</span><br>
<span class="quotelev2">&gt;&gt; with cross-compiles (which it looks like that's doing (specifically,
</span><br>
<span class="quotelev2">&gt;&gt; in that case, compiling for armv5 on an armv7 box)). &#160;I think an
</span><br>
<span class="quotelev2">&gt;&gt; immediate workaround would be to do ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --host=armv5tel-unknown-linux-gnueabi or similar (in addition to
</span><br>
<span class="quotelev2">&gt;&gt; specifying the target -march). &#160;I think you'd need to specify the
</span><br>
<span class="quotelev2">&gt;&gt; --host in a similar manner for any cross-compile of Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not cross compiling, it's native compile although it might be
</span><br>
<span class="quotelev1">&gt; underlying armv7 device but it's running a armv5tel userspace.
</span><br>
<span class="quotelev1">&gt; Ultimately for distribution compile platforms it should be paying
</span><br>
<span class="quotelev1">&gt; attention to what the build system is telling it to compile for not
</span><br>
<span class="quotelev1">&gt; the underlying device because it's built once and could be run on any
</span><br>
<span class="quotelev1">&gt; number of devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10961.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
