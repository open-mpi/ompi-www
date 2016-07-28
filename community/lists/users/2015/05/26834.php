<?
$subject_val = "Re: [OMPI users] Running mpi with different account";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:33:08 2015" -->
<!-- isoreceived="20150504133308" -->
<!-- sent="Mon, 4 May 2015 13:32:57 +0000" -->
<!-- isosent="20150504133257" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running mpi with different account" -->
<!-- id="85BC7E12-CDE4-4ACC-BC62-9DF82C64E2BD_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKY4v99savAoGTKV+hmk5xqY0PyGQiWpEx+qm7TFwU_mGJ1y2Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-04 09:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26833.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26833.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See these blog entries for information about Open MPI's tree-based launching:
<br>

<br>
<a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi</a>
<br>
<a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2</a>
<br>

<br>

<br>
<span class="quotelev1">&gt; On May 3, 2015, at 8:52 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks very much Ralph. It works fine now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just some more questions to make it clearer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Your respond confuses me. Especially for this one, The rsh launch is typically done in a tree topology, and so you get ssh from one backend node to another. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. By adding -mca plm_rsh_no_tree_spawn 1, it seems that daemon process is disabled because I could not find processes orted and sshd  any more. Is rsh used instead here?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 4, 2015 at 12:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 3, 2015, at 5:54 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By changing the order of hosts, the program now can run on 6 machines with 2 accounts. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But it is very weird. Why the order of hosts would matter? Could any one refer something about how openmpi work, please? I have searched on the Internet but nothing related is found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you add &#226;&#128;&#148;mca plm_rsh_no_tree_spawn 1 to your cmd line, you&#226;&#128;&#153;ll probably be okay. The rsh launch is typically done in a tree topology, and so you get ssh from one backend node to another. If you don&#226;&#128;&#153;t have password-less ssh from every machine to each other machine, then you can get the behavior you describe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding that parameter will cause all the ssh commands to come directly from mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 3, 2015 at 10:03 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I got some problems while running MPI programs with different account.
</span><br>
<span class="quotelev2">&gt;&gt; I have done the following things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I have set password-less connection between these machines.
</span><br>
<span class="quotelev2">&gt;&gt; 2. I have specified user names in host file.
</span><br>
<span class="quotelev2">&gt;&gt; 3. I have successfully run the program on two machines with two different accounts. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But when I tried on other machines with the two accounts, openmpi stuck at the very beginning. There is no error information. It seems openmpi falls in some infinite loop. Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 15, 2015 at 6:04 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You can also specify per-machine usernames in $HOME/.ssh/config.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See ssh_config(5).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 13, 2015, at 9:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Apr 13, 2015, at 5:47 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks for all who joined the discussion.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Yes, I meant to run the job under both accounts at the same time.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi, Ralph,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have searched about specifying username in hostfile and got no related page. Could you give a sample of specifying username in hostfile, please?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you just provide the host name as &#226;&#128;&#156;username_at_host&#226;&#128;&#157;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   Another problem is do you also specify password in hostfile?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Good heavens, no! It has to be password-less ssh. Frankly, I doubt this will work as I suspect ssh isn&#226;&#128;&#153;t going to let you do it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Apr 14, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Apr 13, 2015, at 6:56 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Le 2015-04-13 09:54, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; On Apr 13, 2015, at 6:52 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Just out of curiosity... how will OpenMPI start processes under different accounts ? Through SSH while specifying different user names ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; I am assuming that no resource manager or scheduler will allow this.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I&#226;&#128;&#153;m assuming he just plans to run the entire job as the other user. Essentially, it would be the same as if his friend ran the job for him.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; From this comment :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; My problem is that my account is limited to use 4 machines (I need more machines to process data). I can borrow my friend's account and thus have access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I assumed that he wants to run the job under _both_ accounts at the same time.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I honestly don&#226;&#128;&#153;t know if that would work. We do provide a way in the hostfile for someone to specify the username for a remote host, but you&#226;&#128;&#153;d have to get the ssh system to accept it. Assuming the other username also has your host in its authorized keys, then I suppose it might work - I&#226;&#128;&#153;ve never tried it myself.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; My recommendation would be to contact your sysadmin and ask for an exception instead of going through with this insanity (forgive the judgement here).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Agreed!
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Le 2015-04-13 09:47, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Let&#226;&#128;&#153;s hope you sys admin doesn&#226;&#128;&#153;t find out about it - they tend to take a dim view of sharing accounts!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; So long as the path and library path are set correctly, we won&#226;&#128;&#153;t care.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 12, 2015, at 10:33 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am wondering if it is possible that MPI programs can be run on machines with different account?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am doing experiments with some MPI programs on a cluster. My problem is that my account is limited to use 4 machines (I need more machines to process data). I can borrow my friend's account and thus have access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26687.php">http://www.open-mpi.org/community/lists/users/2015/04/26687.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26690.php">http://www.open-mpi.org/community/lists/users/2015/04/26690.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26691.php">http://www.open-mpi.org/community/lists/users/2015/04/26691.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26692.php">http://www.open-mpi.org/community/lists/users/2015/04/26692.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26693.php">http://www.open-mpi.org/community/lists/users/2015/04/26693.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26694.php">http://www.open-mpi.org/community/lists/users/2015/04/26694.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Best Regards.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Xing FENG
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; PhD Candidate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Database Research Group
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; University of New South Wales
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26707.php">http://www.open-mpi.org/community/lists/users/2015/04/26707.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26708.php">http://www.open-mpi.org/community/lists/users/2015/04/26708.php</a>
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26729.php">http://www.open-mpi.org/community/lists/users/2015/04/26729.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Xing FENG
</span><br>
<span class="quotelev2">&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; Database Research Group
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Xing FENG
</span><br>
<span class="quotelev2">&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; Database Research Group
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26831.php">http://www.open-mpi.org/community/lists/users/2015/05/26831.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26832.php">http://www.open-mpi.org/community/lists/users/2015/05/26832.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26833.php">http://www.open-mpi.org/community/lists/users/2015/05/26833.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26833.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26833.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26835.php">XingFENG: "Re: [OMPI users] Running mpi with different account"</a>
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
