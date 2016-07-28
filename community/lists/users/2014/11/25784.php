<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 20:59:41 2014" -->
<!-- isoreceived="20141113015941" -->
<!-- sent="Wed, 12 Nov 2014 20:59:35 -0500" -->
<!-- isosent="20141113015935" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="54641087.4040402_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6EEDB7E6-0AAB-443C-B49E-91B3D99443BD_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 20:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/12/2014 05:45 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug,
</span><br>
<span class="quotelev1">&gt; and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev1">&gt; (without the tcp_if_include option) so we can watch
</span><br>
<span class="quotelev1">&gt; the connection handshake and see what it is doing.
</span><br>
<span class="quotelev1">&gt; The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Done. It really tries to connect to the outside
</span><br>
<span class="quotelev1">&gt; interface of the headnode. But being there a firewall or not:
</span><br>
<span class="quotelev1">&gt; the nodes have no clue how to reach 137.248.0.0 -
</span><br>
<span class="quotelev1">&gt; they have no gateway to this network at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to revert this.
</span><br>
<span class="quotelev1">&gt; They think that there is a gateway although it isn't.
</span><br>
<span class="quotelev1">&gt; When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev1">&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I can do this on my own cluster I still have the
</span><br>
<span class="quotelev1">&gt; 30 seconds delay on a cluster where I'm not root,
</span><br>
<span class="quotelev1">&gt; while this can be because of the firewall there.
</span><br>
<span class="quotelev1">&gt; The gateway on this cluster is indeed going
</span><br>
<span class="quotelev1">&gt; to the outside world.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally I find this behavior a little bit too aggressive
</span><br>
<span class="quotelev1">&gt; to use all interfaces. If you don't check this carefully
</span><br>
<span class="quotelev1">&gt; beforehand and start a long running application one might
</span><br>
<span class="quotelev1">&gt; even not notice the delay during the startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Reuti
<br>
<p>You could use the mca parameter file
<br>
(say, $prefix/etc/openmpi-mca-params.conf) to configure cluster-wide
<br>
the oob (and btl) interfaces to be used.
<br>
The users can still override your choices if they want.
<br>
<p>Just put a line like this in openmpi-mca-params.conf :
<br>
oob_tcp_if_include=192.168.154.0/26
<br>
<p>(and similar for btl_tcp_if_include, btl_openib_if_include).
<br>
<p>Get a full list from &quot;ompi_info --all --all |grep if_include&quot;.
<br>
<p>See these FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>Compute nodes tend to be multi-homed, so what criterion would OMPI use
<br>
to select one interface among many,
<br>
not knowing beforehand what exists in a particular computer?
<br>
There would be a risk to make a bad choice.
<br>
The current approach gives you everything, and you
<br>
pick/select/restrict what you want to fit your needs,
<br>
with mca parameters (which can be set in several
<br>
ways and with various scopes).
<br>
<p>I don't think this bad.
<br>
However, I am biased about this.
<br>
I like and use the openmpi-mca-params.conf file
<br>
to setup sensible defaults.
<br>
At least I think they are sensible. :)
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It tries so independent from the internal or external name of the headnode
</span><br>
given in the machinefile - I hit ^C then.
<br>
I attached the output of Open MPI 1.8.1 for this setup too.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25785.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
