<?
$subject_val = "Re: [OMPI users] Running mpi with different account";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:59:24 2015" -->
<!-- isoreceived="20150504135924" -->
<!-- sent="Mon, 4 May 2015 23:59:05 +1000" -->
<!-- isosent="20150504135905" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running mpi with different account" -->
<!-- id="CAKY4v99OpY8G-Wubkfe3V5zh6CQGV7bYD1u03S0JZ=a7ts+KwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="85BC7E12-CDE4-4ACC-BC62-9DF82C64E2BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running mpi with different account<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-04 09:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Previous message:</strong> <a href="26834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks very much, Jeff.
<br>
<p>On Mon, May 4, 2015 at 11:32 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; See these blog entries for information about Open MPI's tree-based
</span><br>
<span class="quotelev1">&gt; launching:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2015, at 8:52 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks very much Ralph. It works fine now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just some more questions to make it clearer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Your respond confuses me. Especially for this one, The rsh launch is
</span><br>
<span class="quotelev1">&gt; typically done in a tree topology, and so you get ssh from one backend node
</span><br>
<span class="quotelev1">&gt; to another.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. By adding -mca plm_rsh_no_tree_spawn 1, it seems that daemon process
</span><br>
<span class="quotelev1">&gt; is disabled because I could not find processes orted and sshd  any more. Is
</span><br>
<span class="quotelev1">&gt; rsh used instead here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, May 4, 2015 at 12:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 3, 2015, at 5:54 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; By changing the order of hosts, the program now can run on 6 machines
</span><br>
<span class="quotelev1">&gt; with 2 accounts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But it is very weird. Why the order of hosts would matter? Could any
</span><br>
<span class="quotelev1">&gt; one refer something about how openmpi work, please? I have searched on the
</span><br>
<span class="quotelev1">&gt; Internet but nothing related is found.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you add &#226;&#128;&#148;mca plm_rsh_no_tree_spawn 1 to your cmd line, you&#226;&#128;&#153;ll
</span><br>
<span class="quotelev1">&gt; probably be okay. The rsh launch is typically done in a tree topology, and
</span><br>
<span class="quotelev1">&gt; so you get ssh from one backend node to another. If you don&#226;&#128;&#153;t have
</span><br>
<span class="quotelev1">&gt; password-less ssh from every machine to each other machine, then you can
</span><br>
<span class="quotelev1">&gt; get the behavior you describe.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Adding that parameter will cause all the ssh commands to come directly
</span><br>
<span class="quotelev1">&gt; from mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sun, May 3, 2015 at 10:03 PM, XingFENG &lt;xingfeng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got some problems while running MPI programs with different account.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have done the following things.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. I have set password-less connection between these machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. I have specified user names in host file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. I have successfully run the program on two machines with two
</span><br>
<span class="quotelev1">&gt; different accounts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But when I tried on other machines with the two accounts, openmpi stuck
</span><br>
<span class="quotelev1">&gt; at the very beginning. There is no error information. It seems openmpi
</span><br>
<span class="quotelev1">&gt; falls in some infinite loop. Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Apr 15, 2015 at 6:04 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can also specify per-machine usernames in $HOME/.ssh/config.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See ssh_config(5).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Apr 13, 2015, at 9:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Apr 13, 2015, at 5:47 PM, XingFENG &lt;xingfeng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks for all who joined the discussion.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Yes, I meant to run the job under both accounts at the same time.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hi, Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have searched about specifying username in hostfile and got no
</span><br>
<span class="quotelev1">&gt; related page. Could you give a sample of specifying username in hostfile,
</span><br>
<span class="quotelev1">&gt; please?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; you just provide the host name as &#226;&#128;&#156;username_at_host&#226;&#128;&#157;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;   Another problem is do you also specify password in hostfile?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Good heavens, no! It has to be password-less ssh. Frankly, I doubt
</span><br>
<span class="quotelev1">&gt; this will work as I suspect ssh isn&#226;&#128;&#153;t going to let you do it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Tue, Apr 14, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; On Apr 13, 2015, at 6:56 AM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Le 2015-04-13 09:54, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; On Apr 13, 2015, at 6:52 AM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Just out of curiosity... how will OpenMPI start processes under
</span><br>
<span class="quotelev1">&gt; different accounts ? Through SSH while specifying different user names ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; I am assuming that no resource manager or scheduler will allow
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; I&#226;&#128;&#153;m assuming he just plans to run the entire job as the other
</span><br>
<span class="quotelev1">&gt; user. Essentially, it would be the same as if his friend ran the job for
</span><br>
<span class="quotelev1">&gt; him.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; From this comment :
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; My problem is that my account is limited to use 4 machines (I need
</span><br>
<span class="quotelev1">&gt; more machines to process data). I can borrow my friend's account and thus
</span><br>
<span class="quotelev1">&gt; have access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I assumed that he wants to run the job under _both_ accounts at the
</span><br>
<span class="quotelev1">&gt; same time.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I honestly don&#226;&#128;&#153;t know if that would work. We do provide a way in the
</span><br>
<span class="quotelev1">&gt; hostfile for someone to specify the username for a remote host, but you&#226;&#128;&#153;d
</span><br>
<span class="quotelev1">&gt; have to get the ssh system to accept it. Assuming the other username also
</span><br>
<span class="quotelev1">&gt; has your host in its authorized keys, then I suppose it might work - I&#226;&#128;&#153;ve
</span><br>
<span class="quotelev1">&gt; never tried it myself.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; My recommendation would be to contact your sysadmin and ask for
</span><br>
<span class="quotelev1">&gt; an exception instead of going through with this insanity (forgive the
</span><br>
<span class="quotelev1">&gt; judgement here).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Agreed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Le 2015-04-13 09:47, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Let&#226;&#128;&#153;s hope you sys admin doesn&#226;&#128;&#153;t find out about it - they tend
</span><br>
<span class="quotelev1">&gt; to take a dim view of sharing accounts!
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; So long as the path and library path are set correctly, we won&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; care.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 12, 2015, at 10:33 PM, XingFENG &lt;
</span><br>
<span class="quotelev1">&gt; xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am wondering if it is possible that MPI programs can be run
</span><br>
<span class="quotelev1">&gt; on machines with different account?
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am doing experiments with some MPI programs on a cluster. My
</span><br>
<span class="quotelev1">&gt; problem is that my account is limited to use 4 machines (I need more
</span><br>
<span class="quotelev1">&gt; machines to process data). I can borrow my friend's account and thus have
</span><br>
<span class="quotelev1">&gt; access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26687.php">http://www.open-mpi.org/community/lists/users/2015/04/26687.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26690.php">http://www.open-mpi.org/community/lists/users/2015/04/26690.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26691.php">http://www.open-mpi.org/community/lists/users/2015/04/26691.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26692.php">http://www.open-mpi.org/community/lists/users/2015/04/26692.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26693.php">http://www.open-mpi.org/community/lists/users/2015/04/26693.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26694.php">http://www.open-mpi.org/community/lists/users/2015/04/26694.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; ---
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26707.php">http://www.open-mpi.org/community/lists/users/2015/04/26707.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26708.php">http://www.open-mpi.org/community/lists/users/2015/04/26708.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26729.php">http://www.open-mpi.org/community/lists/users/2015/04/26729.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26831.php">http://www.open-mpi.org/community/lists/users/2015/05/26831.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26832.php">http://www.open-mpi.org/community/lists/users/2015/05/26832.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Xing FENG
</span><br>
<span class="quotelev2">&gt; &gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt; &gt; Database Research Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt; &gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt; &gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26833.php">http://www.open-mpi.org/community/lists/users/2015/05/26833.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26834.php">http://www.open-mpi.org/community/lists/users/2015/05/26834.php</a>
</span><br>
<p><p><p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Previous message:</strong> <a href="26834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
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
