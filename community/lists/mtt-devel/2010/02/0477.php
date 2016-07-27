<?
$subject_val = "[MTT devel] GDS errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 17:19:47 2010" -->
<!-- isoreceived="20100211221947" -->
<!-- sent="Thu, 11 Feb 2010 17:19:41 -0500" -->
<!-- isosent="20100211221941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] GDS errors" -->
<!-- id="1415FD9C-D1F4-4706-BF38-41E339CA47B2_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [MTT devel] GDS errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 17:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Jeff Squyres: "[MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking in the appspot dashboard, I see a bunch of errors when Cisco tried to submit test run data.  There's a few random errors, but a bunch that look like what I pasted below.  How do I diagnose this further?  Clearly, some field is too long -- how do I find out which one?
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; 128.107.241.170 - - [11/Feb/2010:00:51:21 -0800] &quot;POST /client HTTP/1.1&quot; 500 1972 - &quot;MPI Test MTTGDS Reporter,gzip(gfe)&quot; &quot;open-mpi-mtt.appspot.com&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; E02-11 12:51AM 21.241
<br>
Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/ext/webapp/__init__.py&quot;, line 509, in __call__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;handler.post(*groups)
<br>
&nbsp;&nbsp;File &quot;/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py&quot;, line 961, in post
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status = self._submit();
<br>
&nbsp;&nbsp;File &quot;/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py&quot;, line 485, in _submit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test_run_phase.put()
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 801, in put
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self._populate_internal_entity()
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 779, in _populate_internal_entity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self._entity = self._populate_entity(_entity_class=_entity_class)
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 839, in _populate_entity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self._to_entity(entity)
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/ext/db/__init__.py&quot;, line 1465, in _to_entity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;entity[key] = value
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/api/datastore.py&quot;, line 492, in __setitem__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datastore_types.ValidateProperty(name, value)
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1290, in ValidateProperty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;prop_validator(name, v)
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1181, in ValidatePropertyString
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ValidateStringLength(name, value, max_len=_MAX_STRING_LENGTH)
<br>
&nbsp;&nbsp;File &quot;/base/python_lib/versions/1/google/appengine/api/datastore_types.py&quot;, line 1171, in ValidateStringLength
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(name, len(value), max_len))
<br>
BadValueError: Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Jeff Squyres: "[MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
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
