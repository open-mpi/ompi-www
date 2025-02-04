<?
$subject_val = "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 01:38:07 2014" -->
<!-- isoreceived="20140327053807" -->
<!-- sent="Thu, 27 Mar 2014 05:37:56 +0000" -->
<!-- isosent="20140327053756" -->
<!-- name="Wang,Yanfei(SYS)" -->
<!-- email="wangyanfei01_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: 	&amp;#180;&amp;#240;&amp;#184;&amp;#180;: example/Hello_c.c : mpirun run failed on two physical nodes." -->
<!-- id="90EBD3F3C2BD0E44804EEB54DD5003A455232F7B_at_TC-MAIL-MB02.internal.baidu.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="CAMD57oeW3C-NqBw-A24dGTHXW5S2J81QsffCkH4Yv=cO6LstUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes.<br>
<strong>From:</strong> Wang,Yanfei(SYS) (<em>wangyanfei01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 01:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14397.php">Ralph Castain: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi&#163;&#172;
<br>

<br>
I found that the server installed OpenMPI arms with iptables, so further communication between ib03 and ib04 is prohibited! The mpirun works fine across multi-server with hello_c
<br>

<br>
Thanks Ralph !
<br>

<br>
Thanks
<br>
-Yanfei
<br>

<br>
&#183;&#162;&#188;&#254;&#200;&#203;: devel [mailto:devel-bounces_at_[hidden]] &#180;&#250;&#177;&#237; Ralph Castain
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2014&#196;&#234;3&#212;&#194;26&#200;&#213; 17:45
<br>
&#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
<br>
&#214;&#247;&#204;&#226;: Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes.
<br>

<br>
Can you please configure OMPI with --enable-debug, and then execute
<br>
mpirun -mca plm_base_verbose 10 -host ib03 hostname
<br>
This will provide debug information about the problem.
<br>
Thanks
<br>
Ralph
<br>

<br>
On Tue, Mar 25, 2014 at 9:51 PM, Wang,Yanfei(SYS) &lt;wangyanfei01_at_[hidden]&lt;mailto:wangyanfei01_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>

<br>
Thanks jeff,  and I have not figured out what happened yet with this FAQ.
<br>

<br>
1. Ssh remote login OK:
<br>
[root_at_bb-nsi-ib04 examples]# ssh ib03 hostname
<br>
bb-nsi-ib03.bb01.*.com
<br>
[root_at_bb-nsi-ib04 examples]#
<br>
2. following command return immediately without nothing returned
<br>
[root_at_bb-nsi-ib04 examples]# mpirun -host ib03 hostname
<br>
[root_at_bb-nsi-ib04 examples]#
<br>
3. following command excute successfully.
<br>
[root_at_bb-nsi-ib04 examples]# ssh ib03  mpirun
<br>
--------------------------------------------------------------------------
<br>
mpirun could not find anything to do.
<br>

<br>
It is possible that you forgot to specify how many processes to run
<br>
via the &quot;-np&quot; argument.
<br>
--------------------------------------------------------------------------
<br>
[root_at_bb-nsi-ib04 examples]#
<br>

<br>
So, does it seem like that the non-interactive shell profile is not correctly configured?  Step 3 can execute succefully...
<br>

<br>
Hope any response!
<br>

<br>
BR
<br>

<br>
Yanfei Wang
<br>

<br>
-----&#211;&#202;&#188;&#254;&#212;&#173;&#188;&#254;-----
<br>
&#183;&#162;&#188;&#254;&#200;&#203;: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] &#180;&#250;&#177;&#237; Jeff Squyres (jsquyres)
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2014&#196;&#234;3&#212;&#194;25&#200;&#213; 22:09
<br>
&#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
<br>
&#214;&#247;&#204;&#226;: Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes.
<br>

<br>
Try this FAQ entry:
<br>

<br>
<a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
<br>

<br>
On Mar 25, 2014, at 6:54 AM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&lt;mailto:wangyanfei01_at_[hidden]&gt;&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a fresh learner of OpenMPI programmer, and have some troubles on building mpi programming, hope some helps..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The example/helloc_c can works successfully with 2 process on local machine, however, do not work on two separate physical node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Physical two nodes:
</span><br>
<span class="quotelev1">&gt; Eg:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# mpirun -hostfile hosts -np 2 hello_c The
</span><br>
<span class="quotelev1">&gt; command just return instantly without nothing printed.
</span><br>
<span class="quotelev1">&gt; Local machine:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# mpirun -np 2 hello_c Hello, world, I am 0
</span><br>
<span class="quotelev1">&gt; of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com&lt;mailto:root_at_bb-nsi-ib04.bb01.*.com&gt;
</span><br>
<span class="quotelev1">&gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108) Hello, world, I am 1 of
</span><br>
<span class="quotelev1">&gt; 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com&lt;mailto:root_at_bb-nsi-ib04.bb01.*.com&gt;
</span><br>
<span class="quotelev1">&gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; -----peer machine is ok--------
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib03 examples]# mpirun -np 2 hello_c Hello, world, I am 0
</span><br>
<span class="quotelev1">&gt; of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com&lt;mailto:root_at_bb-nsi-ib03.bb01.*.com&gt;
</span><br>
<span class="quotelev1">&gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108) Hello, world, I am 1 of
</span><br>
<span class="quotelev1">&gt; 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com&lt;mailto:root_at_bb-nsi-ib03.bb01.*.com&gt;
</span><br>
<span class="quotelev1">&gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib03 examples]#
</span><br>
<span class="quotelev1">&gt; the command run successfully, and print two message!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration details:
</span><br>
<span class="quotelev1">&gt; OpenMPI version: 1.7.5
</span><br>
<span class="quotelev1">&gt; Hostfile:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# cat hosts
</span><br>
<span class="quotelev1">&gt; ib03 slots=1
</span><br>
<span class="quotelev1">&gt; ib04 slots=1
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; /etc/hosts:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# cat /etc/hosts
</span><br>
<span class="quotelev1">&gt; 192.168.71.3 ib03
</span><br>
<span class="quotelev1">&gt; 192.168.71.4 ib04
</span><br>
<span class="quotelev1">&gt; SSH:
</span><br>
<span class="quotelev1">&gt; Public rsa key is redistributed two machine, ib03 and ib04, and to do ssh login in without password is ok, I am sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am confused about this trouble, and anyone can help us?  It have nothing log and error tip, could anyone tell me how to do diagnose it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yanfei Wang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14385.php">http://www.open-mpi.org/community/lists/devel/2014/03/14385.php</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14386.php">http://www.open-mpi.org/community/lists/devel/2014/03/14386.php</a>
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14396.php">http://www.open-mpi.org/community/lists/devel/2014/03/14396.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>In reply to:</strong> <a href="14397.php">Ralph Castain: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
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
