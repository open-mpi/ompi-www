<?
$subject_val = "Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 05:45:02 2014" -->
<!-- isoreceived="20140326094502" -->
<!-- sent="Wed, 26 Mar 2014 02:45:02 -0700" -->
<!-- isosent="20140326094502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: example/Hello_c.c : mpirun run failed on two physical nodes." -->
<!-- id="CAMD57oeW3C-NqBw-A24dGTHXW5S2J81QsffCkH4Yv=cO6LstUQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="90EBD3F3C2BD0E44804EEB54DD5003A455232797_at_TC-MAIL-MB02.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 05:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>In reply to:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Reply:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please configure OMPI with --enable-debug, and then execute
<br>
<p>mpirun -mca plm_base_verbose 10 -host ib03 hostname
<br>
<p>This will provide debug information about the problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On Tue, Mar 25, 2014 at 9:51 PM, Wang,Yanfei(SYS) &lt;wangyanfei01_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks jeff,  and I have not figured out what happened yet with this FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Ssh remote login OK:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# ssh ib03 hostname
</span><br>
<span class="quotelev1">&gt; bb-nsi-ib03.bb01.*.com
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; 2. following command return immediately without nothing returned
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# mpirun -host ib03 hostname
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; 3. following command excute successfully.
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# ssh ib03  mpirun
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun could not find anything to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is possible that you forgot to specify how many processes to run
</span><br>
<span class="quotelev1">&gt; via the &quot;-np&quot; argument.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, does it seem like that the non-interactive shell profile is not
</span><br>
<span class="quotelev1">&gt; correctly configured?  Step 3 can execute succefully...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope any response!
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
<span class="quotelev1">&gt; -----&#211;&#202;&#188;&#254;&#212;&#173;&#188;&#254;-----
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: devel [mailto:devel-bounces_at_[hidden]] &#180;&#250;&#177;&#237; Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2014&#196;&#234;3&#212;&#194;25&#200;&#213; 22:09
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try this FAQ entry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2014, at 6:54 AM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am a fresh learner of OpenMPI programmer, and have some troubles on
</span><br>
<span class="quotelev1">&gt; building mpi programming, hope some helps..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The example/helloc_c can works successfully with 2 process on local
</span><br>
<span class="quotelev1">&gt; machine, however, do not work on two separate physical node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Physical two nodes:
</span><br>
<span class="quotelev2">&gt; &gt; Eg:
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]# mpirun -hostfile hosts -np 2 hello_c The
</span><br>
<span class="quotelev2">&gt; &gt; command just return instantly without nothing printed.
</span><br>
<span class="quotelev2">&gt; &gt; Local machine:
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]# mpirun -np 2 hello_c Hello, world, I am 0
</span><br>
<span class="quotelev2">&gt; &gt; of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com
</span><br>
<span class="quotelev2">&gt; &gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108) Hello, world, I am 1 of
</span><br>
<span class="quotelev2">&gt; &gt; 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com
</span><br>
<span class="quotelev2">&gt; &gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev2">&gt; &gt; -----peer machine is ok--------
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib03 examples]# mpirun -np 2 hello_c Hello, world, I am 0
</span><br>
<span class="quotelev2">&gt; &gt; of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com
</span><br>
<span class="quotelev2">&gt; &gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108) Hello, world, I am 1 of
</span><br>
<span class="quotelev2">&gt; &gt; 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com
</span><br>
<span class="quotelev2">&gt; &gt; Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib03 examples]#
</span><br>
<span class="quotelev2">&gt; &gt; the command run successfully, and print two message!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configuration details:
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI version: 1.7.5
</span><br>
<span class="quotelev2">&gt; &gt; Hostfile:
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]# cat hosts
</span><br>
<span class="quotelev2">&gt; &gt; ib03 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; ib04 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev2">&gt; &gt; /etc/hosts:
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_bb-nsi-ib04 examples]# cat /etc/hosts
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.71.3 ib03
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.71.4 ib04
</span><br>
<span class="quotelev2">&gt; &gt; SSH:
</span><br>
<span class="quotelev2">&gt; &gt; Public rsa key is redistributed two machine, ib03 and ib04, and to do
</span><br>
<span class="quotelev1">&gt; ssh login in without password is ok, I am sure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am confused about this trouble, and anyone can help us?  It have
</span><br>
<span class="quotelev1">&gt; nothing log and error tip, could anyone tell me how to do diagnose it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BR
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yanfei Wang
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14385.php">http://www.open-mpi.org/community/lists/devel/2014/03/14385.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14386.php">http://www.open-mpi.org/community/lists/devel/2014/03/14386.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14396.php">http://www.open-mpi.org/community/lists/devel/2014/03/14396.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14398.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>In reply to:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>Reply:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
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
