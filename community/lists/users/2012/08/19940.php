<?
$subject_val = "Re: [OMPI users] Regarding hyperthreding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 07:55:36 2012" -->
<!-- isoreceived="20120814115536" -->
<!-- sent="Tue, 14 Aug 2012 13:55:31 +0200" -->
<!-- isosent="20120814115531" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding hyperthreding" -->
<!-- id="CAJ_xm3BOMuRjQyV=c5yoRTqSwNqQvVvw+xqBQ3UdURxXqOhR9w_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB7164062D2_at_FMSMSX107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding hyperthreding<br>
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 07:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19939.php">Elken, Tom: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19939.php">Elken, Tom: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
<p>Thank you.
<br>
<p>I haven't still changed my code to run when threading is  needed (presently
<br>
working).
<br>
I have doubt that when i calculate the MPI ranks using the MPI command  it
<br>
gives only the nodes which have given in a host file.
<br>
But how can i calculate the MPI ranks as you have told i.e N=H(    number
<br>
of CPUs showing on a node ) x M ( number of nodes in a cluster).
<br>
<p>And I would like test like this if have 2 nodes and where I can use up to
<br>
50 cores. I would like to scale like 2,4,8,16,32,45 cores and at the same
<br>
time if use 8 cores then I would like to take the readings as node1- 3cores
<br>
and node2-5 cores. So in order to do that should I need mention anything in
<br>
the host file as I have mentioned the No.of nodes.
<br>
<p>And can provide me any tutorials which explains with an example programs.
<br>
<p><p>Thanking you,
<br>
<p><p>On Mon, Aug 13, 2012 at 6:59 PM, Elken, Tom &lt;tom.elken_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Seshendra,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have implemented hyperthreading by Enabling it in the BIOS, then
</span><br>
<span class="quotelev1">&gt; when you look at****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat /proc/cpuinfo output, you will see 2x the # of CPUs than the number of
</span><br>
<span class="quotelev1">&gt; cores on your system. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If that number of CPUs showing on a node = H, and the number of nodes in
</span><br>
<span class="quotelev1">&gt; your cluster with this same configuration is M,   ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you can run your program on up to N = H x M  MPI ranks,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and your Open MPI  mpirun command can use the****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#145;-np N &#150;npernode H&#146;   options to indicate this.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that with some applications, you may see very little benefit to
</span><br>
<span class="quotelev1">&gt; hyperthreading.  In any case, you should also run on &#147;-np N/2&#148; ranks and
</span><br>
<span class="quotelev1">&gt; add the &#147;-npernode H/2&#148; setting to not use more ranks per node than you
</span><br>
<span class="quotelev1">&gt; have cores per node, and compare performance with N ranks (with H per node).
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Tom****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *seshendra seshu
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, August 13, 2012 9:27 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Regarding hyperthreding****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written an code mpi and an iam trying to implement hyperthreading
</span><br>
<span class="quotelev1">&gt; environment. So could any one tell me how to implement and run the
</span><br>
<span class="quotelev1">&gt; program in open mpi.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kindly help me.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19940/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19939.php">Elken, Tom: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19939.php">Elken, Tom: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
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
