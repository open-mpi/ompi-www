<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 19:24:33 2014" -->
<!-- isoreceived="20141016232433" -->
<!-- sent="Thu, 16 Oct 2014 19:24:27 -0400" -->
<!-- isosent="20141016232427" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="544053AB.10808_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20141016213852.GI55306_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 19:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25520.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25516.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/16/2014 05:38 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Thu, Oct 16, 2014 at 05:27:54PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Aurelien!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aha, &quot;vader btl&quot;, that is new to me!
</span><br>
<span class="quotelev2">&gt;&gt; I tought Vader was that man dressed in black in Star Wars,
</span><br>
<span class="quotelev2">&gt;&gt; Obi-Wan Kenobi's nemesis.
</span><br>
<span class="quotelev2">&gt;&gt; That was a while ago, my kids were children,
</span><br>
<span class="quotelev2">&gt;&gt; and Alec Guiness younger than Harrison Ford is today.
</span><br>
<span class="quotelev2">&gt;&gt; Oh, how nostalgic code developers can get when it comes
</span><br>
<span class="quotelev2">&gt;&gt; to naming things ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I am using &quot;vader&quot;, it is totally inadvertent.
</span><br>
<span class="quotelev2">&gt;&gt; There was no such a thing in Open MPI 1.6 and earlier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that you mentioned, I can see lots of it in the 1.8.3
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info output.
</span><br>
<span class="quotelev2">&gt;&gt; In addition, my stderr files show messages like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; imb.e38352:[1,5]&lt;stddiag&gt;:[node13:16334] mca: bml: Not using sm btl to
</span><br>
<span class="quotelev2">&gt;&gt; [[59987,1],26] on node node13 because vader btl has higher exclusivity
</span><br>
<span class="quotelev2">&gt;&gt; (65536 &gt; 65535)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, you are right, &quot;vader&quot; is taking over and knocking off &quot;sm&quot; (and openib
</span><br>
<span class="quotelev2">&gt;&gt; and everybody else).
</span><br>
<span class="quotelev2">&gt;&gt; Darn Vader!
</span><br>
<span class="quotelev2">&gt;&gt; Probably knem is going down the tubes along with sm, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depends. If there is a reason to continue supporting knem then vader
</span><br>
<span class="quotelev1">&gt; will be updated to support it. I don't currently see a reason to at this
</span><br>
<span class="quotelev1">&gt; time though (since sm continues to live for now).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right now knem is not working in OMPI 1.8.3, even if I turn off vader,
<br>
and leave only sm,self,openib.
<br>
I just sent another email documenting that.
<br>
<p><span class="quotelev2">&gt;&gt; I was used to sm, openib, self and tcp BTLs.
</span><br>
<span class="quotelev2">&gt;&gt; I normally just do &quot;btl = ^tcp&quot; in the MCA parameters file,
</span><br>
<span class="quotelev2">&gt;&gt; to stick to sm, openib, and self.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That worked fine in 1.6.5 (and earlier), and knem worked
</span><br>
<span class="quotelev2">&gt;&gt; flawlessly there.
</span><br>
<span class="quotelev2">&gt;&gt; The same settings in 1.8.3 don't bring up the knem functionality.
</span><br>
<span class="quotelev2">&gt;&gt; So, this seems to be yet another change in 1.8.3 that I need to learn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you or some other list subscriber elaborate a bit about
</span><br>
<span class="quotelev2">&gt;&gt; this 'vader' btl?
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI FAQ doesn't have anthing about it.
</span><br>
<span class="quotelev2">&gt;&gt; What is it after all?
</span><br>
<span class="quotelev2">&gt;&gt; Does it play the same role as &quot;sm&quot;, i.e., an intra-node btl?
</span><br>
<span class="quotelev2">&gt;&gt; Considering the name, is &quot;vader&quot; good or bad?
</span><br>
<span class="quotelev2">&gt;&gt; Or better: In which circumstances is &quot;vader&quot; good and when is it bad?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vader is a btl I originally wrote to support Cray's XPMEM shared memory
</span><br>
<span class="quotelev1">&gt; interface. It was designed to be cleaner than btl/sm have better small
</span><br>
<span class="quotelev1">&gt; message latency, bandwidth, and message rates. Because its latency is so
</span><br>
<span class="quotelev1">&gt; much better than sm I removed the XPMEM requirement and added CMA
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I presume this requires kernel 3.X, as Aurelien pointed out.
<br>
As a matter of policy, and to keep your user base broad,
<br>
I would suggest to keep a generous
<br>
range of backwards compatible support built into OMPI.
<br>
This would be sm, knem, etc, which I suppose can coexist with vader, or not?
<br>
I can't speak for others but we run production codes in
<br>
standard Linux distributions (Centos 6.X, 5.X) whith 2.6.Y kernels.
<br>
I suppose other people have similar situations.
<br>
<p><span class="quotelev2">&gt;&gt; Should I give in to the dark side of the force and keep &quot;vader&quot;
</span><br>
<span class="quotelev2">&gt;&gt; turned on, or should I just do something like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl = ^tcp,^vader&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can turn off vader if you want to use knem. I would run some tests
</span><br>
<span class="quotelev1">&gt; to see if there is much of a difference between sm/knem and vader
</span><br>
<span class="quotelev1">&gt; though. I don't have any systems that have knem installed so I haven't
</span><br>
<span class="quotelev1">&gt; been able to run these tests myself. I would primarily focus on the
</span><br>
<span class="quotelev1">&gt; memory usage and the bandwidth.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; -Nathan
</span><br>
<p>Please, see my last email.
<br>
Turning off vader and sm on, still doesn't make knem work,
<br>
unless I made some big mistake along the way.
<br>
I would love to use 1.8.3 in production,
<br>
as long as sm+knem support works, hence it it would be
<br>
great if somebody points out any mistake that I may have made.
<br>
<p>Also, for large messages, IMB with 1.6.5+sm+knem gives
<br>
me ~30% speedups w.r.t. 1.8.3+sm+(broken)-knem or w.r.t. 1.8.3+vader,
<br>
although admittedly due to our 2.6 kernel, no CMA, etc,
<br>
the environment is not favorable to vader to begin with.
<br>
[And yet another good reason to fix/keep sm+knem in OMPI 1.8.]
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25516.php">http://www.open-mpi.org/community/lists/users/2014/10/25516.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25520.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25516.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
