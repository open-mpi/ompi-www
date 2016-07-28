<?
$subject_val = "Re: [OMPI devel] Warnings from pgcc-13.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 15:51:08 2014" -->
<!-- isoreceived="20140117205108" -->
<!-- sent="Fri, 17 Jan 2014 12:51:01 -0800" -->
<!-- isosent="20140117205101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings from pgcc-13.10" -->
<!-- id="FDC4E2C7-2068-4084-BE8C-9BD6C7BD41CD_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17uzjvA-hCrm+bXtkJNyrgPTp21O-LJhqv0PiSK1a=6tg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings from pgcc-13.10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 15:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13796.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>In reply to:</strong> <a href="13796.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13795.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2014, at 12:44 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I might be the most active lurker on Earth, but I am still that: an individual outside the OMPI core developers who follows the devel list.  So, excepting bugs that cause me actual harm (and this is NOT one) I am usually happy to defer to the core developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I just sent in response to Larry Baker, I've determined that PGI is warning about (const char *) arguments passed to varargs functions, which seems to me to be a bug (how can you claim to be type checking arguments against &quot;...&quot;).
</span><br>
<span class="quotelev1">&gt; So, I vote for ignore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And just to close the issue you raised earlier (the last 3 instances not involving const char *):
</span><br>
<span class="quotelev1">&gt; I *did* find the last three instances to all involve passing a (const char *):
</span><br>
<span class="quotelev1">&gt;    state_base_fns.c: orte_job_state_to_str() returns a const-qualified value (the only tricky case).
</span><br>
<span class="quotelev1">&gt;    plm_rsh_component.c: parameter 'agent_list' is const-qualified
</span><br>
<span class="quotelev1">&gt;    plm_rsh_module.c: parameter 'agent' is const-qualified.
</span><br>
<p>Ah, I missed that - thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding casts to string literals did NOT change or eliminate the warnings.
</span><br>
<p>Good to know
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 17, 2014 at 12:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm...I hate chasing compiler bugs, and since this is only a warning, I would tend to defer making changes and just let folks push on PGI to fix their bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone object to that strategy?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 12:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, if I follow your report correctly is is probably the &quot;static&quot; (not the &quot;const&quot;) property of the string literals' type that leads pgcc to warn.  If that is the case, then I agree that this is NOT a warning that is consistent with the C standard's rules for type compatibility.  Thus I agree that it is probably a PGI bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we determine that these warnings are the product of a PGI bug, but one can silence them with a cast, then how do you want to proceed?  I can probably sort out all four combinations of static and const qualified char* pretty quickly (once I get the chance).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 17, 2014 at 11:44 AM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From what I can see in the arguments to OPAL_OUTPUT_VERBOSE() in line 356 at <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/f48eeda443104a64dc89e4f5fab4c940e44d8615/opal/mca/db/hash/db_hash.c">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/f48eeda443104a64dc89e4f5fab4c940e44d8615/opal/mca/db/hash/db_hash.c</a>, this is the same PGI bug I reported 22 Jul 2010, which was assigned TPR 17139.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Customer information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Product: 2183-WS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PIN: 507549
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem description:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to track down the warnings that occur when compiling the UCAR NetCDF package with PGI compilers.  I have found a case that gcc does not warn about, but pgcc does.  If I understand the code and the C (1990) standard, I think pgcc is complaining too much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reproduce the warnings by downloading the UCAR NetCDF source package, netcdf.tar.gz, from<a href="http://www.unidata.ucar.edu/software/netcdf/">http://www.unidata.ucar.edu/software/netcdf/</a>.  Assuming you download it to /usr/local/src, here are the commands that illustrate the warnings:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # cd /usr/local/src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tar -xzf netcdf.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # cd netcdf-4.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ./configure &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # cd ncgen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # pgcc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc    -g -O2 -tp amd64 -Msignextend -DNO_PGI_OFFSET -c -o genf77.o genf77.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (genf77.c: 498)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (genf77.c: 511)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC/x86-64 Linux 10.3-0: compilation completed with warnings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To eliminate the warnings, I had to modify the two source lines to cast the result from static const char* f77varncid() as (char *):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* Use the specialized put_att_XX routines if possible*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    switch (basetype-&gt;typ.typecode) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_BYTE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_SHORT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_INT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_FLOAT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_DOUBLE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        f77attrify(asym,code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        codedump(code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        bbClear(code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        bbprintf0(stmt,&quot;stat = nf_put_att_%s(ncid, %s, %s, %s, %lu, %sval)\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                nfstype(basetype-&gt;typ.typecode),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                (asym-&gt;att.var == NULL?&quot;NF_GLOBAL&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                      :(char *) f77varncid(asym-&gt;att.var)),   &lt;--- here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                f77escapifyname(asym-&gt;name),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                nftype(basetype-&gt;typ.typecode),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                len,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                ncftype(basetype-&gt;typ.typecode));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        codedump(stmt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    case NC_CHAR:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        len = bbLength(code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        f77quotestring(code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        bbprintf0(stmt,&quot;stat = nf_put_att_text(ncid, %s, %s, %lu, &quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                (asym-&gt;att.var == NULL?&quot;NF_GLOBAL&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                      :(char *)f77varncid(asym-&gt;att.var)),   &lt;--- and here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                f77escapifyname(asym-&gt;name),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                (len==0?1:len));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        codedump(stmt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        codedump(code);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        codeline(&quot;)&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is static const char* f77varncid():
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* Compute the name for a given var's id*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* Watch out: the result is a static*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static const char*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; f77varncid(Symbol* vsym)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    const char* tmp1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char* vartmp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tmp1 = f77name(vsym);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    vartmp = poolalloc(strlen(tmp1)+strlen(&quot;_id&quot;)+1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    strcpy(vartmp,tmp1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    strcat(vartmp,&quot;_id&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    return vartmp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are other lines in genf77.c that use f77varncid() in a print statement, so the warnings do not occur every time f77varncid() provides a string for %s:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (nvars &gt; 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        f77skip();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        f77comment(&quot;variable ids&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        for(ivar = 0; ivar &lt; nvars; ivar++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Symbol* vsym = (Symbol*)listget(vardefs,ivar);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            bbprintf0(stmt,&quot;integer %s;\n&quot;, f77varncid(vsym));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            codedump(stmt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warnings occur in the only two instances where f77varncid() is used in a conditional expression.  In both cases, the second operand is a literal string, e.g., &quot;NF_GLOBAL&quot;.  I would have thought that a (static const char*) and a string literal would be compatible types.  I experimented with a (const char *) cast instead of a (char *) cast, but that does not work.  I think it should.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I admit, I have an old copy of the C standard &#151; from 1990.  But, here's my interpretation of what it says about this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#149; 6.1.4 String literals, says string literals are converted to an array of type char.  If the program attempts to modify a string literal, the behavior is undefined.  It does not say that the type has the const type qualifier (though, you would think it should).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#149; 6.3.15 Conditional operator, says if the second and third operands are pointers ..., the result type is a pointer to a type qualified with all the type qualifiers of the types pointed-to by both operands.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would seem to explain the warning message, since the string literal is (char *) and f77varncid() is (const char *).  However, 6.3.15 goes on to say:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Furthermore, if both operands are pointers to ... differently qualified versions of a compatible type, the result has the composite type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which leads me to believe you are allowed to mix const and non-const versions of a compatible type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lastly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#149; 6.5.3 Type qualifiers, says that the properties associated with qualified types are meaningful only for expressions that are lvalues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to make the issue moot, since it says const-ness only applies to lvalues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I think both 6.3.15 and 6.5.3 imply that (char *) and (const char *) are compatible as the second and third operands in a conditional expression which is not an lvalue, which is the case in this code.  As I mentioned above, gcc does not complain about this code.  What do you think?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I could inquire about the current status of this TPR if you like.  (Might as well.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 17 Jan 2014, at 11:28 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are probably right that the string literals are a likely cause (type char[] ? ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will poke at this a bit by adding (char *) casts to see which argument(s) are actually the cause and get back to you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jan 17, 2014 at 8:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at these, I'm a tad puzzled. It would appear that PGI is complaining about the fixed string being passed in the last three cases as there is no (const char*)foo being used in those areas. Yet we use that same logic elsewhere and your report isn't showing those as warnings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you think it is the fixed string that is the issue - or is it the (const char*) variable we need to recast?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 16, 2014, at 11:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My builds of the trunk with pgcc-13.10 turned up the following warnings:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 354)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 376)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 452)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 534)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/state/base/state_base_fns.c: 766)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_component.c: 368)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_module.c: 1337)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe all of these are related to passing a (const char *) to OPAL_OUTPUT_VERBOSE().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13797/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13796.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>In reply to:</strong> <a href="13796.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13795.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
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
