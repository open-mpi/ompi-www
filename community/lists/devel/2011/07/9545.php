<?
$subject_val = "[OMPI devel] need help to add a module";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 23 15:09:10 2011" -->
<!-- isoreceived="20110723190910" -->
<!-- sent="Sat, 23 Jul 2011 15:08:46 -0400" -->
<!-- isosent="20110723190846" -->
<!-- name="bin wang" -->
<!-- email="bighead521_at_[hidden]" -->
<!-- subject="[OMPI devel] need help to add a module" -->
<!-- id="CANyjTBPvzF=ZmfVaFm94oeZJZwm3sb+bP-q9MOS_6aq8yh=U9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] need help to add a module<br>
<strong>From:</strong> bin wang (<em>bighead521_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-23 15:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9546.php">Ralph Castain: "[OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9544.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I'm trying to add a module into open-mpi MCA framework.
<br>
I hope the module could be conditionally compiled and linked.
<br>
It should be disabled by default and enabled by certain flags at configure
<br>
step.
<br>
<p>When I make a dynamic module, everything is working fine.
<br>
The problem is that when I make a static compilation/link,
<br>
the compiler would complain the component variable is not defined.
<br>
<p>In my build log, I found something as following,
<br>
&nbsp;1414 --- MCA component btl:mx (m4 configuration macro)
<br>
1415 checking for MCA component btl:mx compile mode... static
<br>
1416 checking --with-mx value... simple ok (unspecified)
<br>
1417 checking --with-mx-libdir value... simple ok (unspecified)
<br>
1418 checking myriexpress.h usability... no
<br>
1419 checking myriexpress.h presence... no
<br>
1420 checking for myriexpress.h... no
<br>
1421 checking if MCA component btl:mx can compile... no
<br>
<p>Correspondingly the ompi/mca/btl/base/static-components.h had no
<br>
declaration of extern mca_btl_mx_component variable.
<br>
<p>I think this is the behavior I expect for my module. I checked the
<br>
Makefile.am files
<br>
but found nothing special.
<br>
<p>I'm not familiar with those autotools, can anyone give me some detailed
<br>
guidance on what I should do?
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Bin WANG
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9546.php">Ralph Castain: "[OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9544.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
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
