<?
$subject_val = "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 16:03:09 2012" -->
<!-- isoreceived="20120803200309" -->
<!-- sent="Fri, 3 Aug 2012 20:03:05 +0000 (GMT)" -->
<!-- isosent="20120803200305" -->
<!-- name="P. Martin" -->
<!-- email="mrsmiley98_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)" -->
<!-- id="2007795541.317426.1344024185661.JavaMail.mail_at_webmail11" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7312B0CE-60B4-4CBD-9BF0-68C5DB8B542E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)<br>
<strong>From:</strong> P. Martin (<em>mrsmiley98_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 16:03:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>In reply to:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the config.log from 1.6.1rc2.  My previous email was
<br>
the config.log from 1.6.0.  Sorry about that.  Also my setup is
<br>
<p>autoconf 2.69
<br>
automake 1.12.2
<br>
libtool 2.4.2
<br>
<p><p>configure:11649: checking if /usr/bin/clang supports -fno-strict-aliasing
<br>
configure:11665: /usr/bin/clang -c -DNDEBUG -Os -w -pipe -march=native -Xclang -target-feature -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include conftest.c &gt;&amp;5
<br>
configure:11665: $? = 0
<br>
configure:11672: result: yes
<br>
configure:11756: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure:11890: checking if /usr/bin/clang supports __builtin_expect
<br>
configure:11907: /usr/bin/clang -o conftest -DNDEBUG -Os -w -pipe -march=native -Xclang -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include -L/usr/local/lib conftest.c  &gt;&amp;5
<br>
error: unknown argument: '-Xclang'
<br>
configure:11907: $? = 1
<br>
configure: failed program was:
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>In reply to:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
