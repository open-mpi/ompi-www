<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 19:32:11 2014" -->
<!-- isoreceived="20141016233211" -->
<!-- sent="Thu, 16 Oct 2014 23:32:09 +0000" -->
<!-- isosent="20141016233209" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="EE1DACF1-E015-4B37-9CEA-B847B8EEDB0A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="544053AB.10808_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 19:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25523.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus --
<br>
<p>Can you send the output of configure and your config.log?
<br>
<p><p>On Oct 16, 2014, at 4:24 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 10/16/2014 05:38 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 16, 2014 at 05:27:54PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you, Aurelien!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aha, &quot;vader btl&quot;, that is new to me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tought Vader was that man dressed in black in Star Wars,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Obi-Wan Kenobi's nemesis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That was a while ago, my kids were children,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and Alec Guiness younger than Harrison Ford is today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, how nostalgic code developers can get when it comes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to naming things ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I am using &quot;vader&quot;, it is totally inadvertent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was no such a thing in Open MPI 1.6 and earlier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that you mentioned, I can see lots of it in the 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition, my stderr files show messages like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imb.e38352:[1,5]&lt;stddiag&gt;:[node13:16334] mca: bml: Not using sm btl to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[59987,1],26] on node node13 because vader btl has higher exclusivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (65536 &gt; 65535)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, you are right, &quot;vader&quot; is taking over and knocking off &quot;sm&quot; (and openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and everybody else).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Darn Vader!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Probably knem is going down the tubes along with sm, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends. If there is a reason to continue supporting knem then vader
</span><br>
<span class="quotelev2">&gt;&gt; will be updated to support it. I don't currently see a reason to at this
</span><br>
<span class="quotelev2">&gt;&gt; time though (since sm continues to live for now).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now knem is not working in OMPI 1.8.3, even if I turn off vader,
</span><br>
<span class="quotelev1">&gt; and leave only sm,self,openib.
</span><br>
<span class="quotelev1">&gt; I just sent another email documenting that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was used to sm, openib, self and tcp BTLs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I normally just do &quot;btl = ^tcp&quot; in the MCA parameters file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to stick to sm, openib, and self.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That worked fine in 1.6.5 (and earlier), and knem worked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flawlessly there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same settings in 1.8.3 don't bring up the knem functionality.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, this seems to be yet another change in 1.8.3 that I need to learn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you or some other list subscriber elaborate a bit about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this 'vader' btl?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Open MPI FAQ doesn't have anthing about it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is it after all?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does it play the same role as &quot;sm&quot;, i.e., an intra-node btl?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Considering the name, is &quot;vader&quot; good or bad?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or better: In which circumstances is &quot;vader&quot; good and when is it bad?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Vader is a btl I originally wrote to support Cray's XPMEM shared memory
</span><br>
<span class="quotelev2">&gt;&gt; interface. It was designed to be cleaner than btl/sm have better small
</span><br>
<span class="quotelev2">&gt;&gt; message latency, bandwidth, and message rates. Because its latency is so
</span><br>
<span class="quotelev2">&gt;&gt; much better than sm I removed the XPMEM requirement and added CMA
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I presume this requires kernel 3.X, as Aurelien pointed out.
</span><br>
<span class="quotelev1">&gt; As a matter of policy, and to keep your user base broad,
</span><br>
<span class="quotelev1">&gt; I would suggest to keep a generous
</span><br>
<span class="quotelev1">&gt; range of backwards compatible support built into OMPI.
</span><br>
<span class="quotelev1">&gt; This would be sm, knem, etc, which I suppose can coexist with vader, or not?
</span><br>
<span class="quotelev1">&gt; I can't speak for others but we run production codes in
</span><br>
<span class="quotelev1">&gt; standard Linux distributions (Centos 6.X, 5.X) whith 2.6.Y kernels.
</span><br>
<span class="quotelev1">&gt; I suppose other people have similar situations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should I give in to the dark side of the force and keep &quot;vader&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turned on, or should I just do something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl = ^tcp,^vader&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can turn off vader if you want to use knem. I would run some tests
</span><br>
<span class="quotelev2">&gt;&gt; to see if there is much of a difference between sm/knem and vader
</span><br>
<span class="quotelev2">&gt;&gt; though. I don't have any systems that have knem installed so I haven't
</span><br>
<span class="quotelev2">&gt;&gt; been able to run these tests myself. I would primarily focus on the
</span><br>
<span class="quotelev2">&gt;&gt; memory usage and the bandwidth.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, see my last email.
</span><br>
<span class="quotelev1">&gt; Turning off vader and sm on, still doesn't make knem work,
</span><br>
<span class="quotelev1">&gt; unless I made some big mistake along the way.
</span><br>
<span class="quotelev1">&gt; I would love to use 1.8.3 in production,
</span><br>
<span class="quotelev1">&gt; as long as sm+knem support works, hence it it would be
</span><br>
<span class="quotelev1">&gt; great if somebody points out any mistake that I may have made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, for large messages, IMB with 1.6.5+sm+knem gives
</span><br>
<span class="quotelev1">&gt; me ~30% speedups w.r.t. 1.8.3+sm+(broken)-knem or w.r.t. 1.8.3+vader,
</span><br>
<span class="quotelev1">&gt; although admittedly due to our 2.6 kernel, no CMA, etc,
</span><br>
<span class="quotelev1">&gt; the environment is not favorable to vader to begin with.
</span><br>
<span class="quotelev1">&gt; [And yet another good reason to fix/keep sm+knem in OMPI 1.8.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25516.php">http://www.open-mpi.org/community/lists/users/2014/10/25516.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25521.php">http://www.open-mpi.org/community/lists/users/2014/10/25521.php</a>
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
<li><strong>Next message:</strong> <a href="25523.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25521.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
