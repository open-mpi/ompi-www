<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 17:38:54 2014" -->
<!-- isoreceived="20141016213854" -->
<!-- sent="Thu, 16 Oct 2014 15:38:52 -0600" -->
<!-- isosent="20141016213852" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="20141016213852.GI55306_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5440385A.6090406_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 17:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25515.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25514.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 16, 2014 at 05:27:54PM -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Thank you, Aurelien!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha, &quot;vader btl&quot;, that is new to me!
</span><br>
<span class="quotelev1">&gt; I tought Vader was that man dressed in black in Star Wars,
</span><br>
<span class="quotelev1">&gt; Obi-Wan Kenobi's nemesis.
</span><br>
<span class="quotelev1">&gt; That was a while ago, my kids were children,
</span><br>
<span class="quotelev1">&gt; and Alec Guiness younger than Harrison Ford is today.
</span><br>
<span class="quotelev1">&gt; Oh, how nostalgic code developers can get when it comes
</span><br>
<span class="quotelev1">&gt; to naming things ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am using &quot;vader&quot;, it is totally inadvertent.
</span><br>
<span class="quotelev1">&gt; There was no such a thing in Open MPI 1.6 and earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that you mentioned, I can see lots of it in the 1.8.3
</span><br>
<span class="quotelev1">&gt; ompi_info output.
</span><br>
<span class="quotelev1">&gt; In addition, my stderr files show messages like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imb.e38352:[1,5]&lt;stddiag&gt;:[node13:16334] mca: bml: Not using sm btl to
</span><br>
<span class="quotelev1">&gt; [[59987,1],26] on node node13 because vader btl has higher exclusivity
</span><br>
<span class="quotelev1">&gt; (65536 &gt; 65535)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, you are right, &quot;vader&quot; is taking over and knocking off &quot;sm&quot; (and openib
</span><br>
<span class="quotelev1">&gt; and everybody else).
</span><br>
<span class="quotelev1">&gt; Darn Vader!
</span><br>
<span class="quotelev1">&gt; Probably knem is going down the tubes along with sm, right?
</span><br>
<p>Depends. If there is a reason to continue supporting knem then vader
<br>
will be updated to support it. I don't currently see a reason to at this
<br>
time though (since sm continues to live for now).
<br>
<p><span class="quotelev1">&gt; I was used to sm, openib, self and tcp BTLs.
</span><br>
<span class="quotelev1">&gt; I normally just do &quot;btl = ^tcp&quot; in the MCA parameters file,
</span><br>
<span class="quotelev1">&gt; to stick to sm, openib, and self.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That worked fine in 1.6.5 (and earlier), and knem worked
</span><br>
<span class="quotelev1">&gt; flawlessly there.
</span><br>
<span class="quotelev1">&gt; The same settings in 1.8.3 don't bring up the knem functionality.
</span><br>
<span class="quotelev1">&gt; So, this seems to be yet another change in 1.8.3 that I need to learn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you or some other list subscriber elaborate a bit about
</span><br>
<span class="quotelev1">&gt; this 'vader' btl?
</span><br>
<span class="quotelev1">&gt; The Open MPI FAQ doesn't have anthing about it.
</span><br>
<span class="quotelev1">&gt; What is it after all?
</span><br>
<span class="quotelev1">&gt; Does it play the same role as &quot;sm&quot;, i.e., an intra-node btl?
</span><br>
<span class="quotelev1">&gt; Considering the name, is &quot;vader&quot; good or bad?
</span><br>
<span class="quotelev1">&gt; Or better: In which circumstances is &quot;vader&quot; good and when is it bad?
</span><br>
<p>Vader is a btl I originally wrote to support Cray's XPMEM shared memory
<br>
interface. It was designed to be cleaner than btl/sm have better small
<br>
message latency, bandwidth, and message rates. Because its latency is so
<br>
much better than sm I removed the XPMEM requirement and added CMA
<br>
support.
<br>
<p><span class="quotelev1">&gt; Should I give in to the dark side of the force and keep &quot;vader&quot;
</span><br>
<span class="quotelev1">&gt; turned on, or should I just do something like
</span><br>
<span class="quotelev1">&gt; &quot;btl = ^tcp,^vader&quot; ?
</span><br>
<p>You can turn off vader if you want to use knem. I would run some tests
<br>
to see if there is much of a difference between sm/knem and vader
<br>
though. I don't have any systems that have knem installed so I haven't
<br>
been able to run these tests myself. I would primarily focus on the
<br>
memory usage and the bandwidth.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25516/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25515.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25514.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
