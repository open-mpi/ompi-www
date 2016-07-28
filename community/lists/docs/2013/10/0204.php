<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 16:31:09 2013" -->
<!-- isoreceived="20131011203109" -->
<!-- sent="Fri, 11 Oct 2013 16:31:07 -0400" -->
<!-- isosent="20131011203107" -->
<!-- name="Kelly Black" -->
<!-- email="kjblack_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="CAC2Zy4N43KnApsjoBO0E7Fec8sRdWF1OO=Xibp1hUrcw582U2Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F953F88_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Kelly Black (<em>kjblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 16:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Yeah, it never occurred to me to use both, but when I was double checking
<br>
things on the Open MPI website I came across a blurb that said that when
<br>
used together the behavior is different. The documentation said that if the
<br>
names in the --host command are not contained in the host file then the
<br>
mpirun command fails. It was not clear if you do not use a fully qualified
<br>
name in one but not the other how it would be handled.
<br>
<p>Thanks for the info on the network interface. I did not realize that.
<br>
<p>Sincerely,
<br>
Kel
<br>
<p>_______________________________________________________
<br>
Kelly Black                     Phone: (315) 600-8334
<br>
Clarkson University             Fax:   (315) 268-2371
<br>
Department of Math. &amp; C.S.
<br>
PO Box 5815
<br>
Potsdam, NY 13699-5815
<br>
USA
<br>
<p><p>On Fri, Oct 11, 2013 at 4:10 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Also, it's more common to use a hostfile *or* the --host option.  It's
</span><br>
<span class="quotelev1">&gt; fairly uncommon to use both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to whether one should use FQDN or a basename, it doesn't matter to MPI.
</span><br>
<span class="quotelev1">&gt;  If the system resolves the name, OMPI can use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, a point that is worth noting (because so many people make the
</span><br>
<span class="quotelev1">&gt; wrong assumption): the hostnames that are listed in the hostfile or --host
</span><br>
<span class="quotelev1">&gt; option have nothing to do with what network interfaces are used for MPI
</span><br>
<span class="quotelev1">&gt; traffic.  The hosts specified by the hostfile (or --hosts) are *only* used
</span><br>
<span class="quotelev1">&gt; to determine on which nodes MPI processes are launched.  The determination
</span><br>
<span class="quotelev1">&gt; of which network interfaces are used are controlled by other MCA parameters
</span><br>
<span class="quotelev1">&gt; (e.g., the &quot;btl&quot; MCA parameter, and various mca_btl_*_if_include /
</span><br>
<span class="quotelev1">&gt; mca_btl_*_if_exclude MCA parameters).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2013, at 1:57 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Shao-Ching,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; oops, I see what you mean. Sorry, I got sloppy and in a hurry. I should
</span><br>
<span class="quotelev1">&gt; have the slots= flag in that file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely,
</span><br>
<span class="quotelev2">&gt; &gt; Kel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt; &gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt; &gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev2">&gt; &gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt; &gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt; &gt; USA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 11, 2013 at 1:54 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I thought that the &quot;slots&quot; flag was optional in the host file format
</span><br>
<span class="quotelev1">&gt; where the slots option gives the max no. of slots?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Kel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt; &gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt; &gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev2">&gt; &gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt; &gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt; &gt; USA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 11, 2013 at 1:24 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Kel:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I believe the ompi hostfile format is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # myhosts.txt
</span><br>
<span class="quotelev2">&gt; &gt; thingOne.clarkson.edu slots=4
</span><br>
<span class="quotelev2">&gt; &gt; thingTwo.clarkson.edu slots=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shao-Ching
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 11, 2013 at 10:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I *think* that should work, but I haven't personally tested it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 11, 2013, at 9:27 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a question about the --host and --hostfile flags used by mpirun.
</span><br>
<span class="quotelev1">&gt; Do you have to use fully qualified host names in the arguments to the
</span><br>
<span class="quotelev1">&gt; --host option if the fully qualified domain name is given in the host file?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For example, if I have a host file like this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # myhosts.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thingOne.clarkson.edu=4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thingTwo.clarkson.edu=4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can I then use the following command?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun --hostfile myhosts.txt --host thingOne -np 3 bubba
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; kel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PO Box 5815
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev3">&gt; &gt;&gt; USA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0203.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0205.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0206.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
