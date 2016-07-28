<?
$subject_val = "Re: [MTT devel] GDS errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 09:44:01 2010" -->
<!-- isoreceived="20100212144401" -->
<!-- sent="Fri, 12 Feb 2010 17:45:30 +0300" -->
<!-- isosent="20100212144530" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GDS errors" -->
<!-- id="4B75698A.6010106_at_argus-cv.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1415FD9C-D1F4-4706-BF38-41E339CA47B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GDS errors<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 09:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=windows-1252"
 http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Look at message string.<br>
BadValueError: Property <font color="#ff0000">data_message_size</font>
is 667 bytes long; it must be 500 or less. Consider Text instead, which
can store strings of any length.<br>
<br>
Regards,<br>
Igor<br>
<br>
</font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:1415FD9C-D1F4-4706-BF38-41E339CA47B2@cisco.com"
 type="cite">
  <pre wrap="">Looking in the appspot dashboard, I see a bunch of errors when Cisco tried to submit test run data.  There's a few random errors, but a bunch that look like what I pasted below.  How do I diagnose this further?  Clearly, some field is too long -- how do I find out which one?

-----
	• 128.107.241.170 - - [11/Feb/2010:00:51:21 -0800] "POST /client HTTP/1.1" 500 1972 - "MPI Test MTTGDS Reporter,gzip(gfe)" "open-mpi-mtt.appspot.com"
	• E02-11 12:51AM 21.241
Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
Traceback (most recent call last):
  File "/base/python_lib/versions/1/google/appengine/ext/webapp/__init__.py", line 509, in __call__
    handler.post(*groups)
  File "/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py", line 961, in post
    status = self._submit();
  File "/base/data/home/apps/open-mpi-mtt/1.337140739868725607/main.py", line 485, in _submit
    test_run_phase.put()
  File "/base/python_lib/versions/1/google/appengine/ext/db/__init__.py", line 801, in put
    self._populate_internal_entity()
  File "/base/python_lib/versions/1/google/appengine/ext/db/__init__.py", line 779, in _populate_internal_entity
    self._entity = self._populate_entity(_entity_class=_entity_class)
  File "/base/python_lib/versions/1/google/appengine/ext/db/__init__.py", line 839, in _populate_entity
    self._to_entity(entity)
  File "/base/python_lib/versions/1/google/appengine/ext/db/__init__.py", line 1465, in _to_entity
    entity[key] = value
  File "/base/python_lib/versions/1/google/appengine/api/datastore.py", line 492, in __setitem__
    datastore_types.ValidateProperty(name, value)
  File "/base/python_lib/versions/1/google/appengine/api/datastore_types.py", line 1290, in ValidateProperty
    prop_validator(name, v)
  File "/base/python_lib/versions/1/google/appengine/api/datastore_types.py", line 1181, in ValidatePropertyString
    ValidateStringLength(name, value, max_len=_MAX_STRING_LENGTH)
  File "/base/python_lib/versions/1/google/appengine/api/datastore_types.py", line 1171, in ValidateStringLength
    (name, len(value), max_len))
BadValueError: Property data_message_size is 667 bytes long; it must be 500 or less. Consider Text instead, which can store strings of any length.
-----

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4861 (20100212) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>Reply:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
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
