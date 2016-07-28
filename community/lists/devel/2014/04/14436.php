<?
$subject_val = "[OMPI devel] v1.8 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 10:10:09 2014" -->
<!-- isoreceived="20140401141009" -->
<!-- sent="Tue, 1 Apr 2014 07:09:42 -0700" -->
<!-- isosent="20140401140942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8 warnings" -->
<!-- id="89DDFD75-1859-4ED4-9F97-6543290B411A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8 warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 10:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14437.php">Ralph Castain: "[OMPI devel] One more v1.8 warning"</a>
<li><strong>Previous message:</strong> <a href="14435.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would the respective parties please clean these up for v1.8.1?
<br>
<p>common_verbs_find_ports.c:164: warning: 'transport_name_to_str' defined but not used
<br>
btl_openib_component.c: In function 'btl_openib_component_init':
<br>
btl_openib_component.c:2696: warning: unused variable 'qp_index'
<br>
<p><p>In file included from btl_vader_module.c:29:
<br>
btl_vader_fbox.h:51: warning: type qualifiers ignored on function return type
<br>
In file included from btl_vader_component.c:35:
<br>
btl_vader_fbox.h:51: warning: type qualifiers ignored on function return type
<br>
In file included from btl_vader_send.c:29:
<br>
btl_vader_fbox.h:51: warning: type qualifiers ignored on function return type
<br>
In file included from btl_vader_sendi.c:30:
<br>
btl_vader_fbox.h:51: warning: type qualifiers ignored on function return type
<br>
<p><p>Thanks
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14437.php">Ralph Castain: "[OMPI devel] One more v1.8 warning"</a>
<li><strong>Previous message:</strong> <a href="14435.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
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
