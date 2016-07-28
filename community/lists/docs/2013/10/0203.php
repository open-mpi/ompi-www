<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 16:10:16 2013" -->
<!-- isoreceived="20131011201016" -->
<!-- sent="Fri, 11 Oct 2013 20:10:14 +0000" -->
<!-- isosent="20131011201014" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F953F88_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2Zy4PPF87QcP-jkGUfAntkxvE_LNgTnvtvMybsjLa8ouTM3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 16:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, it's more common to use a hostfile *or* the --host option.  It's fairly uncommon to use both.
<br>
<p>As to whether one should use FQDN or a basename, it doesn't matter to MPI.  If the system resolves the name, OMPI can use it.
<br>
<p>Finally, a point that is worth noting (because so many people make the wrong assumption): the hostnames that are listed in the hostfile or --host option have nothing to do with what network interfaces are used for MPI traffic.  The hosts specified by the hostfile (or --hosts) are *only* used to determine on which nodes MPI processes are launched.  The determination of which network interfaces are used are controlled by other MCA parameters (e.g., the &quot;btl&quot; MCA parameter, and various mca_btl_*_if_include / mca_btl_*_if_exclude MCA parameters).
<br>
<p><p>On Oct 11, 2013, at 1:57 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Shao-Ching,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oops, I see what you mean. Sorry, I got sloppy and in a hurry. I should have the slots= flag in that file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Kel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________________
</span><br>
<span class="quotelev1">&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev1">&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev1">&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev1">&gt; PO Box 5815
</span><br>
<span class="quotelev1">&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 11, 2013 at 1:54 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought that the &quot;slots&quot; flag was optional in the host file format where the slots option gives the max no. of slots? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Kel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________________
</span><br>
<span class="quotelev1">&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev1">&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev1">&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev1">&gt; PO Box 5815
</span><br>
<span class="quotelev1">&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 11, 2013 at 1:24 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Kel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the ompi hostfile format is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # myhosts.txt
</span><br>
<span class="quotelev1">&gt; thingOne.clarkson.edu slots=4
</span><br>
<span class="quotelev1">&gt; thingTwo.clarkson.edu slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shao-Ching
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 11, 2013 at 10:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I *think* that should work, but I haven't personally tested it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2013, at 9:27 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about the --host and --hostfile flags used by mpirun. Do you have to use fully qualified host names in the arguments to the --host option if the fully qualified domain name is given in the host file?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, if I have a host file like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # myhosts.txt
</span><br>
<span class="quotelev2">&gt;&gt; thingOne.clarkson.edu=4
</span><br>
<span class="quotelev2">&gt;&gt; thingTwo.clarkson.edu=4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can I then use the following command?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile myhosts.txt --host thingOne -np 3 bubba
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; kel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt;&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt;&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt;&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt;&gt; USA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0204.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
