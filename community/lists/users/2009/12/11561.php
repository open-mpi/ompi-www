<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 22:57:20 2009" -->
<!-- isoreceived="20091217035720" -->
<!-- sent="Wed, 16 Dec 2009 20:57:11 -0700" -->
<!-- isosent="20091217035711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="E11FF3C1-F993-4ADD-859C-0EE15D446353_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="65f1a86ddbd88fdf04203323ce2f3d12.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 22:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could confirm that it is the IPv6 loop by simply disabling IPv6 support - configure with --disable-ipv6 and see if you still get the error messages
<br>
<p>Thanks for continuing to pursue this!
<br>
Ralph
<br>
<p>On Dec 16, 2009, at 8:41 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Just to say that I built the NetBSD OpenMPI 1.4 port from the CVS,
</span><br>
<span class="quotelev2">&gt;&gt; so includsing all the recent work and get the exmaples to run, albeit
</span><br>
<span class="quotelev2">&gt;&gt; still with the:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_sockaddr2str failed:Unknown error (return code 4)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; non-fatal errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As promised, I'll do bit more digging into this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the result of me &quot;fancying a dig&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The software I was adding on top of OpenMPI, initially PETSc, and
</span><br>
<span class="quotelev1">&gt; above that PISM, has exhibited errors when run within an SGE/OpenMPI
</span><br>
<span class="quotelev1">&gt; environment when FOUR or EIGHT processors are used, but not TWO
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The codes run when 2 or 4 processes are run on a single machine
</span><br>
<span class="quotelev1">&gt; outside of SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added a bit of debugging code into the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal/util/net.c:opal_net_get_hostname()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; routine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal-util-net.c.000 2009-12-17 13:55:18.000000000 +1300
</span><br>
<span class="quotelev1">&gt; +++ opal-util-net.c     2009-12-17 14:24:08.000000000 +1300
</span><br>
<span class="quotelev1">&gt; @@ -369,6 +369,10 @@
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /* KMB */
</span><br>
<span class="quotelev1">&gt; +    opal_output(0, &quot;KMB: addr.sa_len %d, addr-&gt;sa_family %d, addrlen %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +               addr-&gt;sa_len, addr-&gt;sa_family, addrlen ) ;
</span><br>
<span class="quotelev1">&gt; +    /* KMB */
</span><br>
<span class="quotelev1">&gt;     error = getnameinfo(addr, addrlen,
</span><br>
<span class="quotelev1">&gt;                         name, NI_MAXHOST, NULL, 0, NI_NUMERICHOST);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I see, from stderr, when running the SkaMPI 5 test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; skampi -i ski/skampi_pt2pt.ski
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; across a 4-node SGE submission.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The SkaMPI test runs through by the way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:09698] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:09698] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:27796] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:27796] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:27294] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:27294] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Temporary failure in
</span><br>
<span class="quotelev1">&gt; name resolution (return code 4)
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] opal_sockaddr2str failed:Temporary
</span><br>
<span class="quotelev1">&gt; failure in name resolution (return code 4)
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Temporary failure
</span><br>
<span class="quotelev1">&gt; in name resolution (return code 4)
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Unknown error (return
</span><br>
<span class="quotelev1">&gt; code 4)
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Unknown error
</span><br>
<span class="quotelev1">&gt; (return code 4)
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:28315] opal_sockaddr2str failed:Temporary
</span><br>
<span class="quotelev1">&gt; failure in name resolution (return code 4)
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Unknown error (return
</span><br>
<span class="quotelev1">&gt; code 4)
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] opal_sockaddr2str failed:Unknown error
</span><br>
<span class="quotelev1">&gt; (return code 4)
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Unknown error
</span><br>
<span class="quotelev1">&gt; (return code 4)
</span><br>
<span class="quotelev1">&gt; [khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
</span><br>
<span class="quotelev1">&gt; [matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; [old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 16, addr.sa_family 2
</span><br>
<span class="quotelev1">&gt; addrlen 16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll notice that at least one &quot;addr&quot; that is making it's way into
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_net_get_hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; has an sa_len of zero and that that is what seems to be triggering
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_sockaddr2str
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering whether this was coming out of the IPv6 getifaddr
</span><br>
<span class="quotelev1">&gt; loop, as I thought I'd set everything explictly in the munged IPv4
</span><br>
<span class="quotelev1">&gt; stanza.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to &quot;tidy up&quot; those messages, if only because failing with
</span><br>
<span class="quotelev1">&gt; bith an unknown error and a temporay failure doesn't seem right !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts welcome,
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11562.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
